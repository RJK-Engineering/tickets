<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TicketHasCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $note = \App\Models\TicketHasCategory::factory()->create([
            'ticket_id' => 1,
            'category_id' => 1,
        ]);
    }
}
