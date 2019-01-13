<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 11.01.19
 * Time: 19:16
 */

namespace App\Http\Controllers;


use App\Note;
use Illuminate\Http\Request;


class NoteController extends Controller
{
    public function showAll()
    {
        return response()->json(Note::all());
    }

    public function show($id)
    {
        return response()->json(Note::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $note = Note::create($request->all());

        return response()->json($note);
    }

    public function update($id, Request $request)
    {
        $note = Note::findOrFail($id);
        $note->update($request->all());

        return response()->json($note);
    }

    public function delete($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();

        return response()->json($note);
    }
}