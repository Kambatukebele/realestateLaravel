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
       
       if(!$photos->hasPages()){
        return redirect("/admin/listings/{$slug}/{$id}/photos/create"); 
       }
       return view('admin/listings/photos/index', ['listings' => $photos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/listings/photos/create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}