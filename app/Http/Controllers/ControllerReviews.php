<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class ControllerReviews extends Controller
{
    public function all()
    {
        return view('reviews/reviews', [
            'reviews' => Review::all()
        ]);
    }

    public function edit($id)
    {
        return view('reviews/editReview', [
            'review' => Review::findOrFail($id),
            'rooms' => Room::all(),
            'users' => User::all()
        ]);
    }

    public function editPost($id, Request $request)
    {

        $review = Review::findOrFail($id);

        $review->grade = $request->grade;
        $review->comment = $request->comment;
        $review->user_id = $request->user;
        $review->room_id = $request->room;

        $review->save();

        return redirect('reviews');
    }

    public function create()
    {
        return view('reviews/createReview', [
            'rooms' => Room::all(),
            'users' => User::all()
        ]);
    }

    public function createPost(Request $request)
    {

        $review = new Review;

        $review->grade = $request->grade;
        $review->comment = $request->comment;
        $review->user_id = $request->user;
        $review->room_id = $request->room;

        $review->save();

        return redirect('reviews');
    }

    public function delete($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect('reviews');
    }
}
