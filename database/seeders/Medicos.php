<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Medicos extends Seeder

{
    public function run()
    {
        DB::table('Medico')->insert([
            'id' => '1',
            'nombre'=>'Juan',
            'apellido'=>'Gutierrez',
            'fecha_incorporacion'=>'2024',
            'viaje_id'=>'1'
        ]);
    }
}