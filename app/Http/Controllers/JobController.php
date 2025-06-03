<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobController extends Controller
{
    function index(): View {
        $jobs = Job::all();
        return view('job.index', ['jobs' => $jobs]);
    }
}
