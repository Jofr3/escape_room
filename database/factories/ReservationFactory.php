<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'org' => $this->faker->company(),
            'email' => $this->faker->email(),
            'phoneNum' => $this->faker->phoneNumber(),
            'country' => $this->faker->country(),
            'user_id' => $this->faker->numberBetween(1,5),
            'room_id' => $this->faker->numberBetween(1,6),
        ];
    }
}
