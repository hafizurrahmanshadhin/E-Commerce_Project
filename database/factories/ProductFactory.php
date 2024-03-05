<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory {
    public function definition(): array {
        return [
            'title'          => fake()->name(),
            'short_des'      => fake()->text(200),
            'price'          => fake()->numberBetween(100, 999),
            'discount'       => fake()->boolean(),
            'discount_price' => fake()->numberBetween(100, 999),
            'image'          => fake()->imageUrl(),
            'stock'          => fake()->boolean(),
            'star'           => fake()->numberBetween(1, 5),
            'remark'         => fake()->randomElement(['popular', 'new', 'top', 'special', 'trending', 'regular']),

            'category_id'    => Category::factory()->create()->id,
            'brand_id'       => Brand::factory()->create()->id,
        ];
    }
}
