<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Game;
use Illuminate\Http\Request;

class ControllerRooms extends Controller
{
    public function all()
    {
        return view('rooms/rooms', [
            'rooms' => Room::all()
        ]);
    }

    public function edit($id)
    {
        return view('rooms/editRoom', [
            'room' => Room::findOrFail($id),
            'games' => Game::all()
        ]);
    }

    public function editPost($id, Request $request)
    {

        $room = Room::findOrFail($id);

        $room->name = $request->name;

        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('images'), $imageName);

        $room->image = $imageName;
        $room->game_id = $request->game;

        $room->save();

        return redirect('rooms');

    }

    public function create()
    {
        return view('rooms/createRoom', [
            'games' => Game::all()
        ]);
    }


    public function createPost(Request $request)
    {

        $room = new Room;

        $room->name = $request->name;

        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('images'), $imageName);

        $room->image = $imageName;
        $room->game_id = $request->game;

        $room->save();

        return redirect('rooms');
    }

    public function delete($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect('rooms');
    }
}
