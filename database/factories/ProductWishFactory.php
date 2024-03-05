<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductWishFactory extends Factory {
    public function definition(): array {
        return [
            'product_id' => Product::factory()->create()->id,
            'user_id'    => User::factory()->create()->id,
        ];
    }
}
