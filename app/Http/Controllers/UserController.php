<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule as ValidationRule;
use phpDocumentor\Reflection\PseudoTypes\False_;

class UserController extends Controller
{
    // Show login page
    public function login() {
        return view('user.login');
    }

    // Show register page
    public function register() {
        return view('user.register');
    }

    // Authenticating an user
    public function authenticate(Request $request) {
        $secureData = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($secureData, $request['remember'])){
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are now logged in! Feel free to use our amazing features!');
        } else {
            return back()->withErrors('email');
        }

    }

    // Logging an user out
    public function logout(Request $request) {
        $request->session()->invalidate();
        auth()->logout();
        return redirect('/')->with('message', 'You are logged out!');
    }

    // Storing a new user
    public function store(Request $request) {
        $secureData = $request->validate([
            'name' => ['required'],
            'email' => ['required',ValidationRule::unique('users')],
            'password' => ['required','confirmed']
        ]);
        // Making sure the user is not admin
        $secureData['admin'] = False;
        $secureData['password'] = bcrypt($secureData['password']);

        $user = User::create($secureData);
        auth()->login($user);

        return redirect('/')->with('message', 'You are now logged in!');
    }
}
