<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductSliderFactory extends Factory {
    public function definition(): array {
        return [
            'title'      => fake()->name(),
            'short_des'  => fake()->text(150),
            'price'      => fake()->numberBetween(100, 999),
            'image'      => fake()->imageUrl(),
            'product_id' => Product::factory()->create()->id,
        ];
    }
}
