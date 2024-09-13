<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TicketCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\TicketCategory::factory(10)->create();
    }
}
