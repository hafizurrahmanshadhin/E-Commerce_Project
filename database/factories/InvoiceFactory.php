<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory {
    public function definition(): array {
        return [
            'total'           => fake()->numberBetween(100, 9999),
            'vat'             => fake()->numberBetween(10, 99),
            'payable'         => fake()->numberBetween(100, 9999),
            'cus_details'     => fake()->text(150),
            'ship_details'    => fake()->text(150),
            'tran_id'         => fake()->numberBetween(100000, 999999),
            'val_id'          => fake()->numberBetween(100000, 999999),
            'delivery_status' => fake()->randomElement(['pending', 'processing', 'completed', 'cancelled']),
            'payment_status'  => fake()->randomElement(['pending', 'processing', 'completed', 'cancelled']),
            'user_id'         => User::factory()->create()->id,
        ];
    }
}
