<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TicketNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (\App\Models\Ticket::all() as $ticket) {
            $note = \App\Models\TicketNote::factory()->make();
            $note->ticket()->associate($ticket);
            $note->save();
        }
    }
}
