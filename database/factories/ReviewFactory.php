<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ReviewFactory extends Factory
{
    public function definition()
    {
        return [
            'grade' => $this->faker->numberBetween(1,5),
            'comment' => $this->faker->paragraph(),
            'user_id' => $this->faker->numberBetween(1, 5),
            'room_id' => $this->faker->numberBetween(1, 6),
        ];
    }
}
