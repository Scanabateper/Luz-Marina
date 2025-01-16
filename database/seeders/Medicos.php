<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class Medicos extends Seeder

{
    public function run()
    {
        DB::table('medicos')->insert(
            [
            'id' => '1',
            'nombre'=>'Juan',
            'apellido'=>'Gutierrez',
            'fecha_incorporacion'=>'2024',
            'viaje_id'=>'1'
            ]);

            DB::table('medicos')->insert(
        [
            'id' => '2',
            'nombre'=>'Pedro',
            'apellido'=>'Alfonso',
            'fecha_incorporacion'=>'2022',
            'viaje_id'=>'2'
        ]);
        DB::table('medicos')->insert(
        [
            'id' => '3',
            'nombre'=>'Mariano',
            'apellido'=>'Rajoy',
            'fecha_incorporacion'=>'2021',
            'viaje_id'=>'3'
        ]);
    
    }
}