<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlPanel extends Controller
{
    // Showing login page for control panel
    public function login() {
        return view('controlPanel.login');
    }

    // Showing home page for control panel
    public function home() {
        return view('controlPanel.home');
    }

    // Showing animes page for control page
    public function animes() {
        return view('controlPanel.animes');
    }

    // Showing new anime page for control page
    public function newAnime() {
        return view('controlPanel.newAnime');
    }

    // Showing anime edit page for control page
    public function editAnime() {
        return view('controlPanel.editAnime');
    }
}
