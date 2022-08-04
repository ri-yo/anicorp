<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Ep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnimeController extends Controller
{
    // Function to show all animes
    public function showAll() {
        
        // Return a view that shows all animes
        return view('animes.all', ['animes' => Anime::latest()->get(), 'latestAnimes' => Anime::latest()->get(), 'highlightedAnime' => Anime::inRandomOrder()->first(), 'filteredAnimes' => Anime::filter()->get()]);
    }

    // Function to show a single anime
    public function showSingle(Anime $anime) {

        // Return a view that shows a single selected anime
        return view('animes.single', ['anime' => $anime, 'eps' => $anime->ep()->get()]);
    }

    // Watch an anime
    public function watch(Anime $anime, Ep $ep) {
        // Get the current ep
        $currentEp = $ep->ep;

        // Get the previous ep
        $previousEp = Ep::where('anime_id', $anime->id)->where('ep', '<', $currentEp)->max('id');

        // Get the next ep
        $nextEp = Ep::where('anime_id', $anime->id)->where('ep', '>', $currentEp)->min('id');

        // Preparing iframe to be watched
        $embedCode = $ep->watch;
        $watch = substr_replace($embedCode, "class='w-full h-full'", 8, 24);

        // Returning the view with all necessary data
        return view('animes.watch', ['anime' => $anime,'currentEp' => $ep,'previousEp' => $previousEp,'nextEp' => $nextEp, 'watch' => $watch]);
    }

    // Showing new anime page for control page
    public function new() {
        return view('animes.new');
    }

    // Showing anime edit page for control page
    public function edit(Anime $anime) {
        return view('animes.edit', ['anime' => $anime]);
    }
    
    // Storing a new anime
    public function store(Request $request) {
        $secureInfo = $request->validate([
            'name' => ['required', 'max:255', 'min:3'],
            'description' => ['required'],
            'animeCover' => ['required'],
            'animeBackground' => ['required']
        ]);

        $secureInfo['animeCover'] = $request->file('animeCover')->store('animeCovers', 'public');
        $secureInfo['animeBackground'] = $request->file('animeBackground')->store('animeBackgrounds', 'public');

        Anime::create($secureInfo);
        return redirect('/manage/animes')->with('message', 'A new anime was added!');
    }

    // Updating an anime
    public function update(Request $request,Anime $anime) {
        $secureInfo = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
        ]);

        if($request->hasFile('animeCover')){
            //Deleting anime cover image
            Storage::disk('public')->delete($anime->animeCover);
            $secureInfo['animeCover'] = $request->file('animeCover')->store('animeCovers', 'public');
        }

        if($request->hasFile('animeBackground')){
            //Deleting anime background image
            Storage::disk('public')->delete($anime->animeBackground);
            $secureInfo['animeBackground'] = $request->file('animeBackground')->store('animeBackgrounds', 'public');
        }

        $anime->update($secureInfo);

        return redirect('/manage/animes')->with('message', 'An anime was updated');
    }

    // Deleting an anime
    public function delete(Anime $anime){
        //Deleting anime cover image
        Storage::disk('public')->delete($anime->animeCover);
        //Deleting anime background image
        Storage::disk('public')->delete($anime->animeBackground);
    
        //Deleting anime record from database
        $anime->delete();
    
        return redirect('/manage/animes')->with('message', $anime->name.' was deleted :(');
    }
}