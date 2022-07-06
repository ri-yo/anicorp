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
        $currentEp = $ep->ep;
        $previousEp = Ep::where('anime_id', $anime->id)->where('ep', '<', $currentEp)->max('id');
        $nextEp = Ep::where('anime_id', $anime->id)->where('ep', '>', $currentEp)->min('id');

        // Preparing iframe to be watched

        // class="w-full h-full"
        $embedCode = $ep->watch;
        $watch = substr_replace($embedCode, "class='w-full h-full'", 8, 24);

        // return htmlspecialchars($watch);

        return view('animes.watch', ['anime' => $anime,'currentEp' => $ep,'previousEp' => $previousEp,'nextEp' => $nextEp, 'watch' => $watch]);
    }
}
