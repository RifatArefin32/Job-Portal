<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class EmployerController extends Controller
{
    // Show all employer
    public function index() {
        try {
            $employers = Employer::all();
            return view('employers.index', ['employers' => $employers]);

        } catch(\Exception $e) {
            abort(500, 'Something went wrong');
        }
    }

    // Show details of an employer
    public function show(string $id) {
        try {
            $employer = Employer::find($id);

            if($employer) {
                return view('employers.show', ['employer' => $employer]);
            }
            else {
                abort(404, 'Not found');
            }

        } catch(\Exception $e) {
            abort(500, 'Something went wrong');
        }
    }
}
