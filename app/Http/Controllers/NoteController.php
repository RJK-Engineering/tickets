<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Resources\NoteResource;
use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return NoteResource::collection(Note::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNoteRequest $request)
    {
        return Note::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return new NoteResource($note);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNoteRequest $request, Note $note)
    {
        return $note->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        return $note->delete();
    }
}
