<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = $this->faker->randomElement(['C','M']);
        $name = $this->faker->name();
        return [
            'name' => $name,
            'type' => $type,
            'email' => $this->faker->email()
        ];
    }
}
