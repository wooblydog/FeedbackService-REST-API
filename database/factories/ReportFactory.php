<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

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
            'customer_id' => Customer::factory(),
            'status' => $status,
            'topic' => $topic,
            'message' => $message,
            'created_at' => $this->faker->dateTimeThisYear()
        ];
    }
}
