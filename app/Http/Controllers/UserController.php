<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show login page
    public function login() {
        return view('user.login');
    }
}
