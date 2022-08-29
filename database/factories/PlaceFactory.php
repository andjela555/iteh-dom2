<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'theatre_name' => 'Theater of' . $this->faker->name,
            'address' => $this->faker->address,
            'room_number' => $this->faker->numberBetween(1, 4),
            'capacity' => $this->faker->numberBetween(50, 200)
        ];
    }
}
