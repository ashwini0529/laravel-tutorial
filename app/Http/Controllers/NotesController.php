<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Card;
use App\Http\Requests;

class NotesController extends Controller
{

	public function addNote(Request $request, Card $card)
	{
		//return $request->all();
	// 	$note = new Note;
	// 	$note->body = $request->body;
	// 	$card->notes()->save($note);
	// 	return back();
	// 
		$card->addNote(new Note($request->all()));
		return back();
	}

	public function edit(Note $note)
	{
		return view('notes.edit',compact('note'));
	}

	public function update(Request $request, Note $note)
	{
		$note->update($request->all());
		return redirect('/cards/'.$note->card_id);

	}

}
