<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	return redirect()->route('employers');
});

Route::get('employers', 'EmployersController@index')->name('employers');

Route::get('employer/{employer}', 'EmployersController@show')->name('employer');

Route::post('employer/{employer}/notes', 'NotesController@store')->name('notes_store');