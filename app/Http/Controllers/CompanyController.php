<?php

namespace App\Http\Controllers;

use App\Company;
use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $company = Company::find($id);
        $jobs = Job::where('company_id', $company->id)->get();
        return view('company.company-page', compact('company', 'jobs'));
    }

    public function developers() {
        return view('company.developers');
    }
    public function newJob() {
        return view('company.new-job');
    }
    public function storeJob(Request $request) {
        $job = new Job();
        $job->company_id = Company::where('user_id', Auth::user()->id)->first()->id;
        $job->position = $request->positions;
        $job->type = $request->type;
        $job->location = $request->location;
        $job->title = $request->title;
        $job->description = $request->description;
        $job->c = $request->c?$request->c:0;
        $job->cpp = $request->cpp?$request->cpp:0;
        $job->java = $request->java?$request->java:0;
        $job->javascript = $request->javascript?$request->javascript:0;
        $job->html = $request->html?$request->html:0;
        $job->python = $request->python?$request->python:0;
        $job->test_link = $request->test_link;
        $job->min = $request->min;

        $areas = '';
        if(!is_null($request->algorithms)) {
            $areas = $areas.$request->algorithms.',';
        }
        if(!is_null($request->web)) {
            $areas = $areas.$request->web.',';
        }
        if(!is_null($request->front)) {
            $areas = $areas.$request->front.',';
        }
        if(!is_null($request->back)) {
            $areas = $areas.$request->back.',';
        }
        if(!is_null($request->machine)) {
            $areas = $areas.$request->machine.',';
        }
        if(!is_null($request->mobile)) {
            $areas = $areas.$request->mobile.',';
        }
        if(!is_null($request->data)) {
            $areas = $areas.$request->data.',';
        }
        $areas = substr($areas, 0, -1);

        $job->areas = $areas;
        $job->save();
        return redirect('/company/job/'.$job->id);
    }

    public function indexJob($id) {
        $job = Job::find($id);
        return view('company.index-job', compact('job'));

    }
}
