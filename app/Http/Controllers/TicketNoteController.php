<?php

namespace App\Http\Controllers;

use App\Models\TicketNote;
use App\Http\Requests\StoreTicketNoteRequest;
use App\Http\Requests\UpdateTicketNoteRequest;

class TicketNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TicketNote::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketNoteRequest $request)
    {
        return TicketNote::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(TicketNote $ticketNote)
    {
        return $ticketNote;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketNoteRequest $request, TicketNote $ticketNote)
    {
        return $ticketNote->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketNote $ticketNote)
    {
        return $ticketNote->delete();
    }
}
