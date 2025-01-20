<?php

namespace Database\Factories;

use App\Models\Rescate;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RescateFactory extends Factory
{
    protected $model = Rescate::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fechaInicio = Carbon::parse(fake()->date());
        $fechaFin = $fechaInicio->copy()->addDays(rand(2, 3));
        return [
            'fecha_inicio'=> $fechaInicio->format('Y-m-d'),
            'fecha_fin'=> $fechaFin->format('Y-m-d'),
        ];
    }
}
