<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function register() {
        return view('auth.company.register-company');
    }

    public function storeRegistration(Request $request) {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'company' => true,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/');
    }

    public function config() {
        return view('company.config');
    }

    public function makeTest() {
        return view('company.test.make');
    }

    public function getCompany($id) {
//        $company = Company::find($id);
        return view('company.company-page');
    }

    public function developers() {
        return view('company.developers');
    }
    public function newJob() {
        return view('company.new-job');
    }

    public function indexJob() {
        return view('company.index-job');
    }
}
