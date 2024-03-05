<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory {
    public function definition(): array {
        return [
            'categoryName' => fake()->word(),
            'categoryImg'  => fake()->imageUrl(640, 480, 'cats', true),
        ];
    }
}
