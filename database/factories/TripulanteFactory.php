<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TripulanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' =>fake()->name(),
            'apellido' =>fake()->name(),
            'fecha_incorporacion'=>fake()->date(),
            'rol'=>fake()->randomElement(['capitan', 'jefe de maquinas','mecanico', 'oficial de puente', 'marineros', 'personal de enfermeria']),
            'viaje_id'=>fake()->randomDigitNotNull(),
        ];
    }
}
