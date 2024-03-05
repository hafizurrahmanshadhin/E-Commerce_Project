<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerProfileFactory extends Factory {
    public function definition(): array {
        return [
            'cus_name'      => fake()->name(),
            'cus_add'       => fake()->address(),
            'cus_city'      => fake()->city(),
            'cus_state'     => fake()->state(),
            'cus_postcode'  => fake()->postcode(),
            'cus_country'   => fake()->country(),
            'cus_phone'     => fake()->phoneNumber(),
            'cus_fax'       => fake()->numberBetween(100000, 999999),

            'ship_name'     => fake()->name(),
            'ship_add'      => fake()->address(),
            'ship_city'     => fake()->city(),
            'ship_state'    => fake()->state(),
            'ship_postcode' => fake()->postcode(),
            'ship_country'  => fake()->country(),
            'ship_phone'    => fake()->phoneNumber(),

            'user_id'       => User::factory()->create()->id,
        ];
    }
}
