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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return redirect()->route('employers');
    });

    Route::get('employers', 'EmployersController@index')->name('employers');

    Route::get('employer/{employer}', 'EmployersController@show')->name('employer');

    Route::post('employer/{employer}/notes', 'NotesController@store')->name('notes_store');

    Route::get('notes/{note}/edit', 'NotesController@edit')->name('notes_edit');
    Route::patch('notes/{note}', 'NotesController@update')->name('notes_update');

    Auth::routes();

    Route::get('/home', 'HomeController@index');
});