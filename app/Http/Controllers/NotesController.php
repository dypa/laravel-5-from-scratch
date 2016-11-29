<?php
namespace App\Http\Controllers;

use App\Employer;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Employer $employer)
    {
//        $note = new Note();
//        $note->body = $request->body;
//
//        $employer->notes()->save($note);

//        $employer->notes()->create($request->all());

        $employer->addNote(new Note($request->all()));

        return back();
    }
}