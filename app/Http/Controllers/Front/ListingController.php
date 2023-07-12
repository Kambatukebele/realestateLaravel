<?php

namespace App\Http\Controllers\Front;

use App\Models\Listing;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show($slug, $id)
    {        
        $listing = Listing::where([
            'id'=> $id,
            'slug' => $slug
        ])->first();
        $photos = Photo::where([
            'listing_id' => $id,
        ])->get();
        
        
        return view('pages/single-listing', [
            'listing' => $listing,
             'photos' => $photos
        ]);
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