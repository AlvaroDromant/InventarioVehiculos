<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehiculos')->insert([

            ['marca' => 'Mercedes', 'modelo' => 'AMG', 'categoria_id' => 1, 'user_id' => 1],
            ['marca' => 'Audi', 'modelo' => 'RS', 'categoria_id' => 2, 'user_id' => 2],
            ['marca' => 'Audi', 'modelo' => 'Q2', 'categoria_id' => 3, 'user_id' => 3],
            ['marca' => 'Opel', 'modelo' => 'Insignia', 'categoria_id' => 2, 'user_id' => 3],
        ]);
    }
}
