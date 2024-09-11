<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = ['In afwachting', 'In behandeling', 'Afgehandeld'];
        return [
            'created_by' => \App\Models\User::inRandomOrder()->first(),
            'title' => fake()->catchPhrase(),
            'status' => $status[array_rand($status)],
        ];
    }
}
