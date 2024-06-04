<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HabilidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('habilidades')->insert([
            'nombre' => 'CacoFonía',
            'descripcion' => 'Evita ataques de sonido',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Hedor',
            'descripcion' => 'Puede amedrentar a un Pokémon al atacarlo debido al mal olor que emana.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Llovizna',
            'descripcion' => 'Hace que llueva al entrar en combate.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Impulso',
            'descripcion' => 'Aumenta su velocidad en cada turno.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Armadura de batalla',
            'descripcion' => 'La robusta coraza que lo protege bloquea los golpes críticos.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        DB::table('habilidades')->insert([
            'nombre' => 'robuztez',
            'descripcion' => 'El Pokémon no puede debilitarse de un solo golpe cuando tiene los PS al máximo. También evita los movimientos fulminantes.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Humedad',
            'descripcion' => 'Aumenta la humedad del entorno y evita que se puedan utilizar movimientos explosivos, tales como autodestrucción.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Flexibilidad',
            'descripcion' => 'Evita ser paralizado gracias a la flexibilidad de su cuerpo.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Velo arena',
            'descripcion' => 'Aumenta su evasión durante las tormentas de arena.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
       

        DB::table('habilidades')->insert([
            'nombre' => 'Electricidad Estatica',
            'descripcion' => 'La electricidad estática que lo envuelve puede paralizar al Pokémon que lo ataque con un movimiento de contacto.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Absorbe Electricidad',
            'descripcion' => 'Si lo alcanza un movimiento de tipo eléctrico, recupera PS en vez de sufrir daño.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Absorve Agua',
            'descripcion' => 'Si lo alcanza un movimiento de tipo eléctrico, recupera PS en vez de sufrir daño.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Despiste',
            'descripcion' => 'Su indiferencia evita que sea provocado, caiga presa del enamoramiento o sufra los efectos de intimidación.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('habilidades')->insert([
            'nombre' => 'Aclimatación',
            'descripcion' => 'Anula todos los efectos del tiempo atmosférico',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        
    }
}
