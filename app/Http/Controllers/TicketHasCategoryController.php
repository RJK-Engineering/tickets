<?php

namespace App\Http\Controllers;

use App\Models\TicketHasCategory;
use App\Http\Requests\StoreTicketHasCategoryRequest;
use App\Http\Requests\UpdateTicketHasCategoryRequest;

class TicketHasCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TicketHasCategory::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketHasCategoryRequest $request)
    {
        return TicketHasCategory::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(TicketHasCategory $ticketHasCategory)
    {
        return $ticketHasCategory;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketHasCategoryRequest $request, TicketHasCategory $ticketHasCategory)
    {
        return $ticketHasCategory->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketHasCategory $ticketHasCategory)
    {
        return $ticketHasCategory->delete();
    }
}
