<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDetailFactory extends Factory {
    public function definition(): array {
        return [
            'img1'       => fake()->imageUrl(),
            'img2'       => fake()->imageUrl(),
            'img3'       => fake()->imageUrl(),
            'img4'       => fake()->imageUrl(),
            'des'        => fake()->text(300),
            'color'      => fake()->colorName(),
            'size'       => fake()->randomElement(['S', 'M', 'L', 'XL', 'XXL']),
            'product_id' => Product::factory()->create()->id,
        ];
    }
}
