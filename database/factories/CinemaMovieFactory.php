<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CinemaMovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cinema_id' => $this->faker->numberBetween(1, 8),
            'movie_id' => $this->faker->numberBetween(1, 30),
        ];
    }
}
