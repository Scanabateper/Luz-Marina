<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tripulantes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tripulantes')->insert(
            [
            'id' => '1',
            'nombre'=>'Pablo',
            'apellido'=>'Pablete',
            'rol'=>'Capitan',
            'fecha_incorporacion'=>'01/01/2020',
            'viaje_id'=>'1'
            ]);
        DB::table('tripulantes')->insert(    
            [
            'id' => '2',
            'nombre'=>'Mateo',
            'apellido'=>'Lopez',
            'rol'=>'Jefe de Maquinas',
            'fecha_incorporacion'=>'01/02/2021',
            'viaje_id'=>'2'
            ]);
        DB::table('tripulantes')->insert(
            [
            'id' => '3',
            'nombre'=>'Lucas',
            'apellido'=>'Fernandez',
            'rol'=>'Mecanico',
            'fecha_incorporacion'=>'01/03/2022',
            'viaje_id'=>'3'
            ]);
         //Hay que meter mas porque cada viaje tiene que tener un minimo de tripulantes
            
    
    }
}
