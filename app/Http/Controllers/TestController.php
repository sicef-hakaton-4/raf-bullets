<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($id) {
        $job = Job::find($id);
        return view('test', compact('job'));
    }

    public function finish($id) {
        $job = Job::find($id);

        return view('finish', compact('job'));
    }
}
