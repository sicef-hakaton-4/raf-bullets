<?php

namespace App\Http\Controllers;

use App\Company;
use App\Developer;
use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeveloperController extends Controller
{
    public function register() {
        return view('auth.developer.register-developer');
    }

    public function index() {
        $companies = Company::all();
        $jobs = Job::all();
        return view('developer.index', compact('companies', 'jobs'));
    }

    public function config() {
        return view('developer.config');
    }



    public function storeCompany($companyId){
//        dd(Auth::user()->id);
        $developer = Developer::where('user_id', Auth::user()->id)->first();
//dd($developer);
        $developer->companies()->attach($companyId);

        return response()->json(['success' => true]);
    }
}
