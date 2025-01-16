<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Rescatados extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rescatados')->insert(
            [
            'id' => '1',
            'nombre'=>'Juanfran',
            'foto'=>'',
            'edad'=>'10',
            'sexo'=>'H',
            'procedencia'=>'',
            'valoracion_medica'=>'todo ok',
            'medico_id'=>'1',
            'rescate_id'=>'1'
            ]);
        DB::table('rescatados')->insert(
         [
            'id' => '2',
            'nombre'=>'Manolito',
            'foto'=>'',
            'edad'=>'33',
            'sexo'=>'H',
            'procedencia'=>'',
            'valoracion_medica'=>'muy mal',
            'medico_id'=>'2',
            'rescate_id'=>'2'
         ]);
        DB::table('rescatados')->insert(
        [
            'id' => '3',
            'nombre'=>'Ane',
            'foto'=>'',
            'edad'=>'22',
            'sexo'=>'M',
            'procedencia'=>'Amorebieta',
            'valoracion_medica'=>'Fantastica',
            'medico_id'=>'3',
            'rescate_id'=>'3'
            ]);
    }
}
