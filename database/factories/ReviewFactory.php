<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ReviewFactory extends Factory
{
    public function definition()
    {
        return [
            'grade' => $this->faker->numberBetween(1,5),
            'comment' => $this->faker->paragraph(),
            'user_id' => $this->faker->numberBetween(1, 5),
            'game_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
