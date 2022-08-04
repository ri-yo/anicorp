<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EpController; 

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

/*Home page*/       Route::get('/', [AnimeController::class, 'showAll']);

/*Anime page*/      Route::get('/anime/{anime}', [AnimeController::class, 'showSingle']);

/*Watch page*/      Route::get('/anime/{anime}/ep/{ep}', [AnimeController::class, 'watch']);

/*LogIn page*/      Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

/*Register page*/   Route::get('/register', [UserController::class, 'register'])->middleware('guest'); 

/*Manage page*/     Route::get('/manage', [ManageController::class, 'home'])->middleware('auth')->middleware('admin');

/*Animes page*/     Route::get('/manage/animes', [ManageController::class, 'animes'])->middleware('auth')->middleware('admin');

/*NewAnime page*/   Route::get('/manage/animes/new', [AnimeController::class, 'new'])->middleware('auth')->middleware('admin');

/*EditAnime page*/  Route::get('/manage/animes/edit/{anime}', [AnimeController::class, 'edit'])->middleware('auth')->middleware('admin');

/*Eps page*/        Route::get('/manage/animes/eps/{anime}', [ManageController::class, 'eps'])->middleware('admin');

/*NewEp page*/      Route::get('/manage/animes/eps/{anime}/new', [EpController::class, 'new'])->middleware('admin');

/*EditEp page*/     Route::get('/manage/animes/eps/{anime}/{ep}/edit', [EpController::class, 'edit'])->middleware('admin');

// GET ROUTES

// POST ROUTES
Route::post('/login/authenticate', [UserController::class, 'authenticate'])->middleware('guest'); // Authenticating an user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth'); // Logging an user out
Route::post('/register/store', [UserController::class, 'store'])->middleware('guest'); // Registering a new user
Route::post('/manage/animes/new/store', [AnimeController::class, 'store'])->middleware('admin'); // Storing new anime
Route::post('/manage/animes/eps/{anime}/new/store', [EpController::class, 'store'])->middleware('admin'); // Storing a new ep
// POST ROUTES

// PUT ROUTES
Route::put('/manage/animes/update/{anime}', [AnimeController::class, 'update'])->middleware('admin'); // EDITTING an anime
Route::put('/manage/animes/eps/{anime}/{ep}/update', [EpController::class, 'update'])->middleware('admin'); // Updating an ep
// PUT ROUTES

// DELETE ROUTES
Route::delete('/manage/animes/delete/{anime}', [AnimeController::class, 'delete'])->middleware('admin'); // DELETING an anime
Route::delete('/manage/animes/eps/{anime}/{ep}/delete', [EpController::class, 'delete'])->middleware('admin'); // Deleting an ep
// DELETE ROUTES