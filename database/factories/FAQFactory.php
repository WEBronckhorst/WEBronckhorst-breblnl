<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FAQ>
 */
class FAQFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'faq_category_id' => $this->faker->numberBetween(1, 7),
            'moeilijke' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->realText(800, 5),
            'title' => ucwords($this->faker->words(4, true)),
        ];
    }
}
