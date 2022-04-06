<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    public function editPost($id, Request $request){

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->dni = $request->dni;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect('users');
    }

    public function createPost(Request $request){

        $user = new User();

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->dni = $request->dni;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect('users');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('users');
    }
}
