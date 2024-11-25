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
        foreach (\App\Models\Ticket::all() as $ticket) {
            foreach (\App\Models\Category::inRandomOrder()->take(3)->get() as $category) {
                $category->tickets()->attach($ticket);
            }
            $category->save();
        }
    }
}
