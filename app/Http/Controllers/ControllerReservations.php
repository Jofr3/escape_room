<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class ControllerReservations extends Controller
{
    public function all()
    {
        return view('reservations/reservations', [
            'reservations' => Reservation::all()
        ]);
    }

    public function edit($id)
    {
        return view('reservations/editReservation', [
            'reservation' => Reservation::findOrFail($id),
            'rooms' => Room::all(),
            'users' => User::all()
        ]);
    }

    public function editPost($id, Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'org' => 'required',
            'email' => 'bail|required|email',
            'phoneNum' => 'required',
            'country' => 'required',
            'user' => 'required',
            'room' => 'required',
        ]);

        $reservation = Reservation::findOrFail($id);

        $reservation->name = $request->name;
        $reservation->org = $request->org;
        $reservation->email = $request->email;
        $reservation->phoneNum = $request->phoneNum;
        $reservation->country = $request->country;
        $reservation->user_id = $request->user;
        $reservation->room_id = $request->room;

        $reservation->save();

        return redirect('reservations');
    }

    public function create()
    {
        return view('reservations/createReservation', [
            'rooms' => Room::all(),
            'users' => User::all()
        ]);
    }

    public function createPost(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'org' => 'required',
            'email' => 'bail|required|email',
            'phoneNum' => 'required',
            'country' => 'required',
            'user' => 'required',
            'room' => 'required',
        ]);

        $reservation = new Reservation;

        $reservation->name = $request->name;
        $reservation->org = $request->org;
        $reservation->email = $request->email;
        $reservation->phoneNum = $request->phoneNum;
        $reservation->country = $request->country;
        $reservation->user_id = $request->user;
        $reservation->room_id = $request->room;

        $reservation->save();

        return redirect('reservations');
    }

    public function delete($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect('reservations');
    }

    public function make()
    {
        return view('reservations/makeReservation', [
            'rooms' => Room::all(),
            'user' => auth()->user()
        ]);
    }

    public function makePost(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'org' => 'required',
            'email' => 'bail|required|email',
            'phoneNum' => 'required',
            'country' => 'required',
            'room' => 'required',
        ]);

        $reservation = new Reservation;

        $reservation->name = $request->name;
        $reservation->org = $request->org;
        $reservation->email = $request->email;
        $reservation->phoneNum = $request->phoneNum;
        $reservation->country = $request->country;
        $reservation->user_id = auth()->user()->id;
        $reservation->room_id = $request->room;

        $reservation->save();

        return redirect('/main');
    }

    public function confirmReservations(){

        return view('reservations/confirmReservations', [
            'reservations' => Reservation::where('confirm','=',false)->get()
        ]);
    }

    public function confirm($id){

        $reservatio = Reservation::find($id);
        $reservatio->confirm = true;
        $reservatio->save();

        return redirect('confirmReservations');
    }
}
