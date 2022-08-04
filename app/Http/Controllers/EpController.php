<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\Ep;

class EpController extends Controller
{
    // Showing form to add a new ep
    public function new(Anime $anime) {
        return view('eps.new', ['anime' => $anime]);
    }

    // Storing a new ep
    public function store(Request $request, Anime $anime) {
        
        // Validating request's data
        $secureInfo = $request->validate([
            'name' => ['required', 'min:2', 'max:255'],
            'ep' => ['required'],
            'watch' => ['required']
        ]);

        // Using a model to create a new ep
        $anime->ep()->create($secureInfo);

        return redirect('/manage/animes/eps/'.$anime->id)->with('message', 'A new ep was added!');

    }

    // Deleting an ep
    public function delete(Anime $anime,Ep $ep) {

        // Deleting an ep by id (from a URI)
        $ep->delete();

        return back()->with('message', 'An ep was deleted!');
    }

    // Showing form to update an ep
    public function edit(Anime $anime, Ep $ep) {
        return view('eps.edit', ['ep' => $ep, 'anime' => $anime]);
    }

    // Updating an ep
    public function update(Request $request, Anime $anime, Ep $ep) {

        // Validating request's data
        $secureInfo = $request->validate([
            'name' => ['required'],
            'ep' => ['required'],
            'watch' => ['required']
        ]);


        // Updating the Ep by Id (From URI)
        $ep->update($secureInfo);

        return redirect('/manage/animes/eps/'.$anime->id)->with('message', 'This ep was updated successfully!');
    }
}
