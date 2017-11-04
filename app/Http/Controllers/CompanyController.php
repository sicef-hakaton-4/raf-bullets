<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function register() {
        return view('auth.company.register-company');
    }
}
