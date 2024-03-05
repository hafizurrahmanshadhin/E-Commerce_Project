<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductCartFactory extends Factory {
    public function definition(): array {
        return [
            'user_id'    => User::factory()->create()->id,
            'product_id' => Product::factory()->create()->id,
            'color'      => fake()->colorName(),
            'size'       => fake()->randomElement(['S', 'M', 'L', 'XL', 'XXL']),
            'qty'        => fake()->numberBetween(1, 10),
            'price'      => fake()->numberBetween(100, 999),
        ];
    }
}
