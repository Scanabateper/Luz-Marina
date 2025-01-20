<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rescatado>
 */
class RescatadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>fake()->name(),
            'foto'=> 'foto' . fake()->unique()->numberBetween(1,100) . '.png',
            'edad'=>fake()->numberBetween(1,100),
            'sexo'=>fake()->randomElement(['M','H']),
            'procedencia'=>fake()->country(),
            'valoracion_medica'=>fake()->randomElement(['Bien' , 'Mal' , 'Regular' , 'Muerto']),
            'medico_id'=>fake()->numberBetween(1,9),
            'rescate_id'=>fake()->randomDigitNotNull(),
        ];
    }
}
