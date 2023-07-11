<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\User;
use App\Helper\Helper; 
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug, $id)
    {
       $photos = Photo::where(['user_id' => auth()->user()->id, 'listing_id' => $id])->paginate(5);
       
       if($photos->total() < 1){
        return redirect("/admin/listings/{$slug}/{$id}/photos/create"); 
       }
       return view('admin/listings/photos/index', [
        'photos' => $photos,
        'slug' => $slug,
        'id' => $id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($slug, $id)
    {
        return view('admin/listings/photos/create', [
            'slug' => $slug,
            'id' => $id
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $slug, $id)
    {       
        //$this->authorize('create', Listing::class); 
        
        $validate = $request->validate([
            'image' => 'required|image',           
        ]);

        $newName = time() . '-' . $request->file('image')->getClientOriginalName();
        $size = $request->file('image')->getSize();
        $name = $newName;
        $request->file('image')->move(public_path('img'), $name); 
        
        $photo = new Photo(); 
        $photo->user_id = auth()->user()->id;
        $photo->name = $name;
        $photo->size = $size; 
        $photo->listing_id = $id;
        $photo->featured = 0;
        //$photo->slug = Helper::slugify("{$request->address}-{$request->address2}-{$request->city}-{$request->state}-{$request->zipcode}");
        
        $photo->save(); 
        session()->flash('success', 'Created New photo Successfully'); 
        return redirect("/admin/listings/{$slug}/{$id}/photos"); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug, $id, $photo_id)
    {
        
        $photo = Photo::find($photo_id);
        //$this->authorize('delete', $listing); 
        $photo->delete();
       
        session()->flash('success', 'Photo has been deleted Successfully'); 
        return redirect("/admin/listings/{$slug}/{$id}/photos"); 
    }

    public function featured($slug, $id, $photo_id)
    {
        
       $old_photo = Photo::where([
            'listing_id' => $id,
            'featured'=> 1,
        ])->first(); 

        if($old_photo !== null){

            $old_photo->featured = 0;
            //$this->authorize('delete', $listing); 
            $old_photo->save();
        }


        $new_photo = Photo::where([
            'listing_id' => $id,
            'id'=> $photo_id,
        ])->first(); 

        $new_photo->featured = 1;
        //$this->authorize('delete', $listing); 
        $new_photo->save();
       
        session()->flash('success', 'Photo has been made Featured Successfully'); 
        return redirect("/admin/listings/{$slug}/{$id}/photos"); 
    }
}