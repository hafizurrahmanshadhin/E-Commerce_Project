<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceProductFactory extends Factory {
    public function definition(): array {
        return [
            'invoice_id' => Invoice::factory()->create()->id,
            'product_id' => Product::factory()->create()->id,
            'user_id'    => User::factory()->create()->id,
            'qty'        => fake()->numberBetween(1, 10),
            'sale_price' => fake()->numberBetween(100, 999),
        ];
    }
}
