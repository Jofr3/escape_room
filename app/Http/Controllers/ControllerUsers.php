<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Reservation;
use App\Models\Review;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ControllerUsers extends Controller
{
    public function all()
    {
        return view('users/users', [
            'users' => User::all()
        ]);
    }

    public function edit($id)
    {
        return view('users/editUser', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function editPost($id, Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'dni' => 'required',
            'email' => 'bail|required|email',
            'password' => 'required',
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->dni = $request->dni;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('users');
    }

    public function createPost(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'dni' => 'required',
            'email' => 'bail|required|email',
            'password' => 'required',
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->dni = $request->dni;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('users');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('users');
    }

    public function account()
    {

        $reservationsNoReview = Reservation::where('name', '=', 'jofre')->where('hasReview', '=', '0')->get();
        $reservationsReview = Reservation::where('name', '=', 'jofre')->where('hasReview', '=', '1')->get();

        return view('other/account', [
            'user' => Auth::user(),
            'reservationsNoReview' => $reservationsNoReview,
            'reservationsReview' => $reservationsReview,
        ]);
    }

    public function updateAccount($id, Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'surname' => 'required',
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->surname = $request->surname;

        $user->save();

        return redirect('main');
    }

    public function review($roomId)
    {

        $room = Room::find($roomId);

        return view('other/createReview', [
            'user' => Auth::user(),
            'room' => $room
        ]);
    }

    public function reviewPost(Request $request)
    {
        $validator = $request->validate([
            'grade' => 'required',
            'comment' => 'required',
        ]);

        $review = new Review;

        $review->grade = $request->grade;
        $review->comment = $request->comment;
        $review->user_id = $request->user;
        $review->game_id = $request->game;

        $reservation = Reservation::where('room_id', '=', $request->room)->where('user_id', '=', $request->user)->firstOrFail();
        $reservation->hasReview = true;

        $review->save();
        $reservation->save();

        return redirect('account');
    }
}
