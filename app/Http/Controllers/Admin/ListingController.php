<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Helper\Helper; 
use App\Models\Listing; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $listings = Listing::where('user_id', auth()->user()->id)->paginate(5);
       return view('admin/listings/index', ['listings' => $listings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Listing::class); 
          return view('admin/listings/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Listing::class); 
        
        $validate = $request->validate([
            'address' => 'required',           
            'address2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required|integer',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'squarefootage' => 'integer',
                   
            
        ]);
        
        $listing = new Listing(); 
        $listing->user_id = auth()->user()->id;
        $listing->address = $request->address;
        $listing->address2 = $request->address2;
        $listing->city = $request->city;
        $listing->state = $request->state;
        $listing->zipcode = $request->zipcode;
        $listing->bedrooms = $request->bedrooms;
        $listing->bathrooms = $request->bathrooms;
        $listing->squarefootage = $request->squarefootage;
         $listing->status = "draft";
        $listing->slug = Helper::slugify("{$request->address}-{$request->address2}-{$request->city}-{$request->state}-{$request->zipcode}");
        
        $listing->save(); 
        session()->flash('success', 'Created New Listing Successfully'); 
        return redirect("/admin/listings/{$listing->slug}/{$listing->id}/edit"); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "hello stored"; 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug, $id)
    {
        $listing = Listing::where(['id'=> $id, 'slug' => $slug])->first();
        $this->authorize('update', $listing); 
        // return $listing; 
        return view('admin/listings/edit', ['listing' => $listing]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug, $id)
    {
        
        
        $validate = $request->validate([
            'address' => 'required',           
            'address2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required|integer',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'squarefootage' => 'integer',
                   
            
        ]);
        
         $listing = Listing::where(['id'=> $id, 'slug' => $slug])->first(); 
         $this->authorize('update', $listing); 
        $listing->address = $request->address;
        $listing->address2 = $request->address2;
        $listing->city = $request->city;
        $listing->state = $request->state;
        $listing->zipcode = $request->zipcode;
        $listing->bedrooms = $request->bedrooms;
        $listing->bathrooms = $request->bathrooms;
        $listing->squarefootage = $request->squarefootage;
         $listing->status = $request->status;
         $listing->description = $request->description;
        $listing->slug = Helper::slugify("{$request->address}-{$request->address2}-{$request->city}-{$request->state}-{$request->zipcode}");
        
        $listing->save(); 
        session()->flash('success', 'Listing Updated Successfully'); 
        return redirect("/admin/listings/{$listing->slug}/{$listing->id}/edit"); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug, $id)
    {
        $listing = Listing::find($id);
        $this->authorize('delete', $listing); 
        $listing->delete();
       
        session()->flash('success', 'Listing has been delete Successfully'); 
        return redirect("/admin/listings"); 
    }
}