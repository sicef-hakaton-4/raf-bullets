<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function register() {
        return view('auth.developer.register-developer');
    }

    public function index() {
        $companies = Company::all();
        return view('developer.index', compact('companies'));
    }

    public function config() {
        return view('developer.config');
    }
}
