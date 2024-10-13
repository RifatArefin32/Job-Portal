<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index() {
        try {
            $jobs = Job::all();
            $data = [
                'jobs' => $jobs
            ];
            return view('jobs.index', $data);

        } catch(\Exception $e) {
            abort(404);
        }
    }

    public function show(string $id) {
        try {
            $job = Job::find($id);
            if($job) {
                return view('jobs.show', ['job' => $job]);
            }
            else {
                abort(404);
            }

        }catch(\Exception $e) {
            abort(404);
        }
    }
}
