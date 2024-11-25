<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (\App\Models\Ticket::all() as $ticket) {
            $note = \App\Models\Note::factory()->make();
            $note->ticket()->associate($ticket);
            $note->save();
        }
    }
}
