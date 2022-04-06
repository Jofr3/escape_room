<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class ControllerGames extends Controller
{
    public function show() {
        return view('main', [
            'games' => Game::all()
        ]);
    }

    public function all()
    {
        return view('games/games', [
            'games' => Game::all()
        ]);
    }

    public function edit($id)
    {
        return view('games/editGame', [
            'game' => Game::findOrFail($id)
        ]);
    }

    public function editPost($id, Request $request)
    {

        $game = Game::findOrFail($id);

        $game->name = $request->name;
        $game->image = $request->image;

        $game->save();

        return redirect('games');
    }

    public function createPost(Request $request)
    {

        $game = new Game;

        $game->name = $request->name;

        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('images'), $imageName);

        $game->image = $imageName;

        $game->save();

        return redirect('games');
    }

    public function delete($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect('games');
    }
}
