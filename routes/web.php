<?php

use App\Http\Controllers\AnimesController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;   

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

// GET ROUTES
Route::get('/', [AnimesController::class, 'animes']); // Showing Home page
Route::get('/anime/{anime}', [AnimesController::class, 'anime']); // Showing Single Anime page
Route::get('/anime/{anime}/ep/{ep}', [AnimesController::class, 'watch']); // Watch anime
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest'); // Showing LogIn page
Route::get('/register', [UserController::class, 'register'])->middleware('guest'); // Showing Register page    
Route::get('/manage', [ManageController::class, 'home'])->middleware('auth')->middleware('admin'); // CONTROL PANEL AUTHENTICATION SYSTEM  
Route::get('/manage/animes', [ManageController::class, 'animes'])->middleware('auth')->middleware('admin'); // Showing CONTROL PANEL animes page
Route::get('/manage/animes/new', [ManageController::class, 'newAnime'])->middleware('auth')->middleware('admin'); // Showing CONTROL PANEL new anime page
Route::get('/manage/animes/edit/{anime}', [ManageController::class, 'animeEdit'])->middleware('auth')->middleware('admin'); // Showing CONTROL PANEL edit anime page
Route::get('/manage/animes/eps/{anime}', [ManageController::class, 'eps'])->middleware('admin'); // Showing page to control EPS
Route::get('/manage/animes/eps/{anime}/new', [ManageController::class, 'newEp'])->middleware('admin'); // Showing form to add new eps
Route::get('/manage/animes/eps/{anime}/{ep}/edit', [ManageController::class, 'epEdit'])->middleware('admin'); // Showing form to update an ep
// GET ROUTES

// POST ROUTES
Route::post('/login/authenticate', [UserController::class, 'authenticate'])->middleware('guest'); // Authenticating an user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth'); // Logging an user out
Route::post('/register/store', [UserController::class, 'store'])->middleware('guest'); // Registering a new user
Route::post('/manage/animes/new/store', [ManageController::class, 'animeStore'])->middleware('admin'); // Storing new anime
Route::post('/manage/animes/eps/{anime}/new/store', [ManageController::class, 'storeEp'])->middleware('admin'); // Storing a new ep
// POST ROUTES

// PUT ROUTES
Route::put('/manage/animes/update/{anime}', [ManageController::class, 'animeUpdate'])->middleware('admin'); // EDITTING an anime
Route::put('/manage/animes/eps/{anime}/{ep}/update', [ManageController::class, 'epUpdate'])->middleware('admin'); // Updating an ep
// PUT ROUTES

// DELETE ROUTES
Route::delete('/manage/animes/delete/{anime}', [ManageController::class, 'animeDelete'])->middleware('admin'); // DELETING an anime
Route::delete('/manage/animes/eps/{anime}/{ep}/delete', [ManageController::class, 'deleteEp'])->middleware('admin'); // Deleting an ep
// DELETE ROUTES