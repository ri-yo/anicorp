<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Ep;
use Illuminate\Http\Request;

class AnimesController extends Controller
{
    // Function to show all animes
    public function animes() {
        return view('animes.animes', ['animes' => Anime::latest()->get(), 'latestAnimes' => Anime::latest()->get(), 'highlightedAnime' => Anime::inRandomOrder()->first(), 'filteredAnimes' => Anime::filter()->get()]);
    }

    // Function to show a single anime
    public function anime(Anime $anime) {
        return view('animes.anime', ['anime' => $anime, 'eps' => $anime->ep()->get()]);
    }

    // Watch an anime
    public function watch(Anime $anime, Ep $ep) {
        $currentEp = $ep->id;
        $previousEp = Ep::where('anime_id', $anime->id)->where('id', '<', $currentEp)->max('id');
        $nextEp = Ep::where('anime_id', $anime->id)->where('id', '>', $currentEp)->limit(1)->get();

        return view('animes.watch', ['anime' => $anime,'currentEp' => $ep,'previousEp' => $previousEp,'nextEp' => $nextEp]);
    }
}
