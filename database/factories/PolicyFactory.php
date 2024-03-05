<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PolicyFactory extends Factory {

    public function definition(): array {
        return [
            'type' => fake()->randomElement(['about', 'refund', 'terms', 'how to buy', 'contact', 'complain']),
            'des'  => fake()->text(),
        ];
    }
}
