<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SslcommerzAccountFactory extends Factory {
    public function definition(): array {
        return [
            'store_id'     => fake()->numberBetween(100000, 999999),
            'store_passwd' => fake()->word(),
            'currency'     => 'BDT',
            'success_url'  => 'http://localhost:8000/success',
            'fail_url'     => 'http://localhost:8000/fail',
            'cancel_url'   => 'http://localhost:8000/cancel',
            'ipn_url'      => fake()->url(),
            'init_url'     => fake()->url(),
        ];
    }
}
