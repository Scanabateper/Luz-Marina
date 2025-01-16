<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Rescates extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rescates')->insert(
            [
            'id' => '1',
            'fecha_inicio'=>'27/08/2021',
            'fecha_fin'=>'30/08/2021'
            ]);
        DB::table('rescates')->insert(
            [
            'id' => '2',
            'fecha_inicio'=>'01/02/2018',
            'fecha_fin'=>'05/02/2018'
            ]);
        DB::table('rescates')->insert(
            [
            'id' => '3',
            'fecha_inicio'=>'15/05/2022',
            'fecha_fin'=>'19/05/2022'
            ]);
    }
}
