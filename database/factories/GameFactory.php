<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'image' => $this->faker->image('public/images/',740,480, null, false),
        ];
    }
}
