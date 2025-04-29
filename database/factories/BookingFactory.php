<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookingFactory extends Factory
{
    public function definition(): array
    {
        return [
            'full_name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'room_type' => $this->faker->randomElement(['Standard', 'Deluxe', 'Suite']),
            'room_price' => $this->faker->randomFloat(2, 1000, 5000),
            'guests' => $this->faker->numberBetween(1, 6),
            'check_in' => now()->addDays(rand(1, 5)),
            'check_out' => now()->addDays(rand(6, 10)),
            'gcash_number' => '09' . $this->faker->numerify('#########'),
            'gcash_amount' => $this->faker->randomFloat(2, 1000, 5000),
        ];
    }
}
