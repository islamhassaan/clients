<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_english_name' => fake()->name(),
            'full_arabic_name' => fake()->name(),
            'username' => fake()->firstName(),
            'email' => fake()->email(),
            'password' => fake()->password(),
            'mobile' => fake()->phoneNumber(),
            'country_code' => fake()->countryCode(),
            'country' => fake()->country(),

        ];
    }
}