<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function about()
    {
		return view('pages.about')->with('numbers', [1, 2, 3, 4, 5]);   	
    }

    public function hello($name)
    {
    	return view('pages.hello', ['name' => $name]);
    }
}
