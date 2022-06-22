<?php

use App\Http\Controllers\AnimesController;
use App\Http\Controllers\ControlPanel;
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

// Showing Home page
Route::get('/', [AnimesController::class, 'animes']);

// Showing Single Anime page
Route::get('/anime', [AnimesController::class, 'anime']);

// Showing LogIn page
Route::get('/login', [UserController::class, 'login']);

// Showing Register page
Route::get('/register', [UserController::class, 'register']);

// Showing CONTROL PANEL
Route::get('/controlpanel', [ControlPanel::class, 'login']);

// Showing CONTROL PANEL home pegae
Route::get('/controlpanel/home', [ControlPanel::class, 'home']);