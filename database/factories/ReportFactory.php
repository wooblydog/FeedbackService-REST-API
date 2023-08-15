<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $topic = $this->faker->sentence(rand(3,8));
        $message = $this->faker->sentence(rand(5,15));
        $status = $this->faker->randomElement(['N', 'W', 'D']);
        return [
            'user_id' => User::factory(),
            'status' => $status,
            'topic' => $topic,
            'message' => $message,
            'created_at' => $this->faker->dateTimeThisYear()
        ];
    }
}
