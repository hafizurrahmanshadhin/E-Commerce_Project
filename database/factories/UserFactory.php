<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory {
    public function definition(): array {
        return [
            'email' => fake()->unique()->safeEmail(),
            'otp'   => fake()->numberBetween(1000, 9999),
        ];
    }
}
