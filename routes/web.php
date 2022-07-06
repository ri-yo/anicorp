<?php

use App\Http\Controllers\AnimesController;
use App\Http\Controllers\ControlPanel;
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
Route::get('/login', [UserController::class, 'login']);

// Authenticating an user
Route::post('/login/authenticate', [UserController::class, 'authenticate']);

// Logging an user out
Route::post('/logout', [UserController::class, 'logout']);

// Showing Register page
Route::get('/register', [UserController::class, 'register']);

// CONTROL PANEL AUTHENTICATION SYSTEM      
Route::get('/controlpanel', [ControlPanel::class, 'login'])->name('login')->middleware('guest');
Route::post('/controlpanel/login/authenticate', [ControlPanel::class, 'authenticate'])->middleware('guest');
Route::post('/controlpanel/logout', [ControlPanel::class, 'logout'])->middleware('auth');

// Showing CONTROL PANEL home page
Route::get('/controlpanel/home', [ControlPanel::class, 'home'])->middleware('auth');

// Showing CONTROL PANEL animes page
Route::get('/controlpanel/animes', [ControlPanel::class, 'animes'])->middleware('auth');

// CONTROL PANEL ANIMES SYSTEM
// Showing CONTROL PANEL new anime page
Route::get('/controlpanel/animes/new', [ControlPanel::class, 'newAnime'])->middleware('auth');
// Storing new anime
Route::post('/controlpanel/animes/new/store', [ControlPanel::class, 'animeStore']);

// Showing CONTROL PANEL edit anime page
Route::get('/controlpanel/edit/anime/{anime}', [ControlPanel::class, 'animeEdit'])->middleware('auth');

// EDITTING an anime
Route::put('/controlpanel/animeupdate/{anime}', [ControlPanel::class, 'animeUpdate']);

// DELETING an anime
Route::delete('/controlpanel/delete/{anime}', [ControlPanel::class, 'animeDelete']);

// Showing page to control EPS
Route::get('/controlpanel/{anime}/eps', [ControlPanel::class, 'eps']);

// Showing form to add new eps
Route::get('/controlpanel/{anime}/eps/new', [ControlPanel::class, 'newEp']);

// Storing a new ep
Route::post('/controlpanel/{anime}/eps/new/store', [ControlPanel::class, 'storeEp']);

// Deleting an ep
Route::delete('/controlpanel/delete/{anime}/{ep}', [ControlPanel::class, 'deleteEp']);

// Showing form to update an ep
Route::get('/controlpanel/epupdate/{anime}/{ep}', [ControlPanel::class, 'epEdit']);

// Updating an ep
Route::put('/controlpanel/putmethod/update/epupdate/{anime}/{ep}', [ControlPanel::class, 'epUpdate']);

/*
Route::get('/drop', function () {
    Schema::dropIfExists('animes');
});*/