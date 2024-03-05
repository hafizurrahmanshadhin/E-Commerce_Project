<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory {
    public function definition(): array {
        return [
            'brandName' => fake()->word(),
            'brandImg'  => fake()->imageUrl(640, 480, 'cats', true),
        ];
    }
}
