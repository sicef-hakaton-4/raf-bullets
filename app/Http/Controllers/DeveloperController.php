<?php

namespace App\Http\Controllers;

use App\Company;
use App\Developer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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



    public function storeCompany($companyId){
//        dd(Auth::user());
//        $developer = Developer::find($developerId);

//        $developer->companies()->attach($companyId);
//
        return response()->json(['success' => true]);
    }
}
