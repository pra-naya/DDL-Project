<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Models\User;

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

//All Users
Route::get('/', [UserController::class, 'index']);

// Route::get('/listings/{listing}/login', [ListingController::class, 'login']);

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Create New User
Route::post('/users', [UserController::class, 'store']);

// Route::get('/users/{user}/information', UserController::class, "display");

//Log User Out
Route::post('/logout', [UserController::class, 'logout']);

//Show Login Form
Route::get('login', [UserController::class, 'login'])->middleware('guest');

//Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


//Show Edit Form
Route::get('/users/{user}/edit', [UserController::class, 'edit']);   

//Update User Information
Route::put('/users/{user}', [UserController::class, 'update']);

//Delete Listing
Route::delete(' /users/{user}',[UserController::class, 'destroy']);