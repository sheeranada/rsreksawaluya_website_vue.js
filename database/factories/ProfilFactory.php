<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profil>
 */
class ProfilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'alamat' => $this->faker->streetAddress(),
            'telp' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'kepemilikan' => $this->faker->company(),
            'direktur' => $this->faker->firstName(),
        ];
    }
}