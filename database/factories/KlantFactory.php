<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Klant>
 */
class KlantFactory extends Factory
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
            'naam' => ucwords($this->faker->words(4, true)),
            'adres' => $this->faker->streetAddress(),
            'postcode' => $this->faker->postcode(),
            'plaats' => $this->faker->city(),
            'website' => $this->faker->domainName(),
            'email' => $this->faker->safeEmail(),
            'telefoon' => $this->faker->e164PhoneNumber(),
            'btw' => $this->faker->numerify('nl#########B#'),
            'kvk' => $this->faker->numerify('#########'),

        ];
    }
}
