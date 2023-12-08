<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cad1Ville;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cad1Etudiant>
 */
class Cad1EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->name(),
            'adresse' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->unique()->email(),
            'date_naissance' => fake()->date('Y-m-d', '2005-01-01'),
            'ville_id' => Cad1Ville::all()->random()->id,
        ];
    }
}
