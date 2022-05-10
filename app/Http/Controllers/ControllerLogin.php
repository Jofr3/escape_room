<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ControllerLogin extends Controller
{

    public function auth(Request $request)
    {
/*        $validator = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'password' => 'required',
        ]);*/

        $input = ([
            'name' => $request->name,
            'surname' => $request->surname,
            'password' => $request->password,
        ]);

        if (Auth::attempt($input)) {
            $request->session()->regenerate();

            return redirect('/main');
        }

        return view('index', [
            'input' => $request
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return view('/index');
    }

    public function signup(Request $request)
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

        return view('/index');
    }
}
