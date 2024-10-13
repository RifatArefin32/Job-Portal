<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index() {
        try {
            $jobs = Job::all();
            return view('jobs.index', ['jobs' => $jobs]);

        } catch(\Exception $e) {
            abort(500, 'Something went wrong');
        }
    }

    public function show(string $id) {
        try {
            $job = Job::find($id);
            if($job) {
                return view('jobs.show', ['job' => $job]);
            }
            else {
                abort(404, 'Not found');
            }

        }catch(\Exception $e) {
            abort(500, 'Something went wrong');
        }
    }
}
