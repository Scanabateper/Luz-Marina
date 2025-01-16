<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Viajes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('viajes')->insert(
            [
            'id' => '1',
            'origen'=>'Cabo de Hornos, Chile',
            'destino'=>'Puerto de Valparaiso, Chile'
            ]);
        DB::table('viajes')->insert(
            [
            'id' => '2',
            'origen'=>'Puerto de Algeciras, España',
            'destino'=>'Puerto de Tanger, Marruecos'
            ]);
        DB::table('viajes')->insert(
            [
            'id' => '3',
            'origen'=>'Punto de Calais, Francia',
            'destino'=>'Puerto de Dover, Reino Unido'
            ]);
        
    
    }
}
