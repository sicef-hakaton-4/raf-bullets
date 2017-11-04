<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function register() {
        return view('auth.developer.register-developer');
    }
}
