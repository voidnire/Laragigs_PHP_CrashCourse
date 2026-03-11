<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// all listings
Route::get('/', [ListingController::class, 'index']);

// show create form 
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// manage listings
Route::get('/listings/manage',[ListingController::class,
    'manage'])->middleware('auth');

// store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//  update
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// delete
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// ---- USERS ----------------------------------

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');//

// Log In User
Route::post('/users/authenticate',[UserController::class,'authenticate']);

/*Route::get('/users/{id}', function ($id) {
    #ddd($id);\
    return "User ID: " . $id;
})->where('id', '[0-9]+');*/

