<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->catchPhrase,
            'duration' => $this->faker->numberBetween(40, 140),
            'plot' => $this->faker->realText,
            'rating' => $this->faker->randomFloat(2, 1, 10)
        ];
    }
}
