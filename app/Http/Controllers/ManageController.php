<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\Ep;
use Illuminate\Support\Facades\Storage;

class ManageController extends Controller
{
    // Showing home page for manage page
    public function home() {
        return view('manage.home');
    }

    // Showing animes page for manage page
    public function animes() {
        return view('manage.animes', ['animes' => Anime::latest()->get()]);
    }

    // Showing page to control eps
    public function eps(Anime $anime) {
        return view('manage.eps', ['anime' => $anime, 'eps' => $anime->ep()->get()]);
    }
}
