<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Espacios>
 */
class EspaciosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'nombre' => $this->faker->word(),
            'area' => $this->faker->numberBetween(15,200),
            'capacidad' => $this->faker->randomNumber(),
            'disponibilidad' => $this->faker->word(),

        ];
    }
}
