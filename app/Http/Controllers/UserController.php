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

    // Log a user in
    public function login() {

        // Return a form for a user to login
        return view('user.login');
    }   

    // Store a new user
    public function register() {

        // Return a form for a user to register
        return view('user.register');
    }

    // Authenticate a user
    public function authenticate(Request $request) {

        // Validating all request's data
        $secureData = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        // Attempting to authenticate
        if(Auth::attempt($secureData, $request['remember'])){
            $request->session()->regenerate();
            return redirect('/')->with('message', 'You are now logged in! Feel free to use our amazing features!');
        };

        return back()->withErrors('email');
    }

    // Log a user out
    public function logout(Request $request) {

        // Invalidate the session
        $request->session()->invalidate();

        // Log the user out
        auth()->logout();

        // Rederect user back to home
        return redirect('/')->with('message', 'You are logged out!');
    }

    // Storing a new user
    public function store(Request $request) {

        // Validating all request's data
        $secureData = $request->validate([
            'name' => ['required'],
            'email' => ['required',ValidationRule::unique('users')],
            'password' => ['required','confirmed']
        ]);

        // Make sure the user is not admin
        $secureData['admin'] = False;

        // Encrypt the password
        $secureData['password'] = bcrypt($secureData['password']);

        // Creating an user's model
        $user = User::create($secureData);

        // Logging the user in
        auth()->login($user);

        return redirect('/')->with('message', 'You are now logged in!');
    }
}
