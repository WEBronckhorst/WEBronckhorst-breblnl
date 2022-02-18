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
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 20),
            'description' => $this->faker->realText(800, 5),
            'ticket_id' => $this->faker->numerify('#########'),
            'title' => ucwords($this->faker->words(4, true)),
            'state' => $this->faker->numberBetween(1, 5),
            'ipaddress' => $this->faker->localIpv4(),
            'macAddress' => $this->faker->macAddress(),
            'device' => ucwords($this->faker->words(4, true)),
        ];
    }
}
