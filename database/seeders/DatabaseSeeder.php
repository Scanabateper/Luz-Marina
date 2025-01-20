<?php

namespace Database\Seeders;

use App\Models\Rescate;
use App\Models\Viaje;
use App\Models\Rescatado;
use App\Models\Tripulante;
use App\Models\Medico;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Rescate::factory(9)->create();
        Viaje::factory(9)->create();
        Rescatado::factory(100)->create();
        Tripulante::factory(50)->create();
        Medico::factory(15)->create();
    }
}
