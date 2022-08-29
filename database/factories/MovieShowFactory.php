<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieShowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'start' => $this->faker->dateTime,
            'price' => $this->faker->numberBetween(100, 1400),
            'movie_id' => $this->faker->numberBetween(1, 10),
            'place_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
