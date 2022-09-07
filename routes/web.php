<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ListingController;
use \App\Http\Controllers\UserController;

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

//All listing
Route::get('/', [ListingController::class, 'index']);

//Show create form
Route::get('/listings/create',[ListingController::class, 'create'])->middleware('auth');

//Store Listing data
Route::post('/listings',[ListingController::class, 'store'])->middleware('auth');

//Show edit form
Route::get('/listings/{listing}/edit',[ListingController::class, 'edit'])->middleware('auth');

//Update Listing
Route::put('/listings/{listing}',[ListingController::class, 'update'])->middleware('auth');

//Delete Listing
Route::delete('/listings/{listing}',[ListingController::class, 'destroyy'])->middleware('auth');

//Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//Single listing
Route::get('/listings/{listing}',[ListingController::class, 'show']);

//Show register and create form
Route::get('/register',[UserController::class, 'create'])->middleware('guest');

//Create new user
Route::post('/users',[UserController::class, 'store']);

//Log User Out
Route::post('/logout',[UserController::class, 'logout'])->middleware('auth');

//Show login form
Route::get('/login',[UserController::class, 'login'])->name('login');

//Login User
Route::post('/users/authenticate',[UserController::class, 'authenticate'])->middleware('guest');
