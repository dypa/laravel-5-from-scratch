<?php

namespace App\Http\Controllers;

use App\Employer;

class EmployersController extends Controller
{
    public function index()
    {
    	$employers = Employer::all();

    	return view('employers/index')->with('employers', $employers);
    }

    public function show(Employer $employer)
    {
        $employer->load('notes.user');

    	return view('employers.show')->with('employer', $employer);
    }
}
