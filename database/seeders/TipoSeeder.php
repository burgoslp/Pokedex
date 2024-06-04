<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipos')->insert([
            'nombre' => 'Normal',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Lucha',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Volador',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('tipos')->insert([
            'nombre' => 'Veneno',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('tipos')->insert([
            'nombre' => 'Tierra',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Roca',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        
        DB::table('tipos')->insert([
            'nombre' => 'Bicho',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Fantasma',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Acero',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('tipos')->insert([
            'nombre' => 'Fuego',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Agua',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Planta',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Electrico',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Psíquico',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('tipos')->insert([
            'nombre' => 'Hielo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Dragon',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('tipos')->insert([
            'nombre' => 'Hada',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('tipos')->insert([
            'nombre' => 'Siniestro',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
