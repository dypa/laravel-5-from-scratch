<?php
namespace App\Http\Controllers;

use App\Employer;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    //сохранение 3 разными способами, 3мя!!!
    public function store(Request $request, Employer $employer)
    {
        $this->validate($request,
            ['body' => 'required|min:10'],
            ['required' => 'Please fill in the :attribute', 'min' => 'The :attribute shoud be of atleast :min characters']
        );

//        $note = new Note();
//        $note->body = $request->body;
//
//        $employer->notes()->save($note);

//        $employer->notes()->create($request->all());

        $employer->addNote(new Note($request->all()), 1);

        return back();
    }

    public function edit(Note $note)
    {
    	return view('notes.edit')->with('note', $note);
    }

    public function update(Request $request, Note $note)
    {
    	$note->update($request->all());

    	return back();
    }
}