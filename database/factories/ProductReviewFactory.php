<?php

namespace Database\Factories;

use App\Models\CustomerProfile;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductReviewFactory extends Factory {
    public function definition(): array {
        return [
            'description' => fake()->text(250),
            'rating'      => fake()->numberBetween(1, 5),
            'customer_id' => CustomerProfile::factory()->create()->id,
            'product_id'  => Product::factory()->create()->id,
        ];
    }
}
