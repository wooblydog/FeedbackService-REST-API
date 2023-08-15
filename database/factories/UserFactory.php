<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = $this->faker->randomElement(['C','M']);

        return [
            'name' => $this->faker->name(),
            'type' => $type,
            'email' => $this->faker->unique()->email(),
            'password' => '12345678', // password,

        ];
    }
}
