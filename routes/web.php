<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('listings', [
        'heading' => 'ultimas cosas',
        'listings' => Listing::all()
    ]);
});

// comprueba que el parametro este creado si no muestra un error 404
Route::get('/listings/{listing}', function (Listing $listing){
    return view('listing', [
        'listing' => $listing
    ]);

} );
