<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimesController extends Controller
{
    // Function to show all animes
    public function animes() {
        return view('animes.animes', ['animes' => Anime::latest()->get(), 'latestAnimes' => Anime::latest()->get(), 'highlightedAnime' => Anime::inRandomOrder()->first(), 'filteredAnimes' => Anime::filter()->get()]);
    }

    // Function to show a single anime
    public function anime(Anime $anime) {
        return view('animes.anime', ['anime' => $anime]);
    }
}
