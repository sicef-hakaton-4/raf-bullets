<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function register() {
        return view('auth.developer.register-developer');
    }

    public function index() {
        return view('developer.index');
    }

    public function config() {
        return view('developer.config');
    }
}
