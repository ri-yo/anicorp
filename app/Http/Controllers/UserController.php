<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return back()->with('message', 'You are logged out!');
    }
}
