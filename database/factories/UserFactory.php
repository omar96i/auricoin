<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('12345'), // Puedes personalizar la contraseña si lo deseas
            'names' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'nit' => $this->faker->ean13,
            'address' => $this->faker->address,
            'country' => $this->faker->country,
            'region' => $this->faker->state,
            'phone' => $this->faker->phoneNumber,
            'bank' => $this->faker->word,
            'type_bank' => $this->faker->word,
            'number_acount' => $this->faker->bankAccountNumber,
            'wallet_number' => $this->faker->creditCardNumber,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
