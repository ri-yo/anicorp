<?php

use App\Http\Controllers\AnimesController;
use App\Http\Controllers\ControlPanel;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

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

// Showing Home page
Route::get('/', [AnimesController::class, 'animes']);

// Showing Single Anime page
Route::get('/anime/{anime}', [AnimesController::class, 'anime']);

// Watch anime
Route::get('/anime/{anime}/ep/{ep}', [AnimesController::class, 'watch']);

// Showing LogIn page
Route::get('/login', [UserController::class, 'login'])->name('login');

// Authenticating an user
Route::post('/login/authenticate', [UserController::class, 'authenticate']);

// Logging an user out
Route::post('/logout', [UserController::class, 'logout']);

// Showing Register page
Route::get('/register', [UserController::class, 'register']);

// Registering a new user
Route::post('/register/authenticate', [UserController::class, 'store']);

// CONTROL PANEL AUTHENTICATION SYSTEM      
Route::get('/manage', [ManageController::class, 'home'])->middleware('auth')->middleware('admin');

// Showing CONTROL PANEL animes page
Route::get('/manage/animes', [ManageController::class, 'animes'])->middleware('auth')->middleware('admin');

// CONTROL PANEL ANIMES SYSTEM
// Showing CONTROL PANEL new anime page
Route::get('/manage/animes/new', [ManageController::class, 'newAnime'])->middleware('auth')->middleware('admin');
// Storing new anime
Route::post('/manage/animes/new/store', [ManageController::class, 'animeStore'])->middleware('admin');

// Showing CONTROL PANEL edit anime page
Route::get('/manage/animes/edit/{anime}', [ManageController::class, 'animeEdit'])->middleware('auth')->middleware('admin');

// EDITTING an anime
Route::put('/manage/animes/update/{anime}', [ManageController::class, 'animeUpdate'])->middleware('admin');

// DELETING an anime
Route::delete('/manage/animes/delete/{anime}', [ManageController::class, 'animeDelete'])->middleware('admin');

// Showing page to control EPS
Route::get('/manage/animes/eps/{anime}', [ManageController::class, 'eps'])->middleware('admin');

// Showing form to add new eps
Route::get('/manage/animes/eps/{anime}/new', [ManageController::class, 'newEp'])->middleware('admin');

// Storing a new ep
Route::post('/manage/animes/eps/{anime}/new/store', [ManageController::class, 'storeEp'])->middleware('admin');

// Deleting an ep
Route::delete('/manage/animes/eps/{anime}/{ep}/delete', [ManageController::class, 'deleteEp'])->middleware('admin');

// Showing form to update an ep
Route::get('/manage/animes/eps/{anime}/{ep}/edit', [ManageController::class, 'epEdit'])->middleware('admin');

// Updating an ep
Route::put('/manage/animes/eps/{anime}/{ep}/update', [ManageController::class, 'epUpdate'])->middleware('admin');