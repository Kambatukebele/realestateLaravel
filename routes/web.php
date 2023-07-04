<?php

use App\Http\Controllers\Admin\ListingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/account', function () {
    return view('pages/saved-listings');
})->name('account');
//User show status
Route::get('/account/show-status', function () {
    return view('pages/show-status');
})->name('show-status');

//Admin Root
Route::group([
    'prefix' => 'admin', 
    'middleware' => ['auth', 'is_admin'],
    'as' => 'admin.'
], function(){
    Route::get('/', function () {
        return view('admin/dashboard');
    })->name('dashboard');

    Route::group([
    'prefix' => 'listings', 
    'as' => 'listings.'
    ], function (){
        Route::get('/', [ListingController::class, 'index'])->name('index');

        Route::get('/create', [ListingController::class, 'create'])->name('create');

        Route::get('/{slug}/{id}/edit', [ListingController::class, 'edit'])->name('edit');
        
        Route::put('/{slug}/{id}', [ListingController::class, 'update'])->name('update');
        
        Route::get('/{slug}/{id}/delete', [ListingController::class, 'destroy'])->name('delete');

        Route::post('/', [ListingController::class, 'store'])->name('store');
    });
});
//Home page
Route::get('/', function () {
    return view('pages/home');
});
//Single Listing
Route::get('/listing/{slug}/{id}', function () {
    return view('pages/single-listing');
});
//Show All Listings
Route::get('/{property_type}/{listing_type}/{city}', function () {
    return view('pages/listings');
})->name('listings');
// //User Login
// Route::get('/home/login', function () {
//     return view('pages/login');
// });
// //User Register
// Route::get('/home/register', function () {
//     return view('pages/register');
// });
//User Saved Listing


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';