<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimesController extends Controller
{
    // Function to show all animes
    public function animes() {
        return view('animes.animes');
    }
}
