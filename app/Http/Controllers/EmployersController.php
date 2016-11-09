<?php

namespace App\Http\Controllers;

use App\Employer;

use Illuminate\Http\Request;

class EmployersController extends Controller
{
    public function index()
    {
    	// $employers = \DB::table('employers')->get();
    	$employers = Employer::all();

    	return view('employers/index')->with('employers', $employers);
    }

    public function show(Employer $employer)
    {
    	return view('employers.show')->with('employer', $employer);
    }
}
