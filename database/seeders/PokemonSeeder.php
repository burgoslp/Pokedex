<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Tipo;
use App\Models\Pokemon;
use App\Models\Habilidad;
use App\Models\Estadistica;
use App\Models\Evolucion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {
            //Pokemon base 1
            $pokemon = new Pokemon();
            $pokemon->codigo = '0001';
            $pokemon->nombre = 'Bulbasaur';
            $pokemon->genero_id = 1;//macho
            $pokemon->altura = 2.04;
            $pokemon->peso = 15.2;
            $pokemon->imagen = 'pikachu.jpg';
            $pokemon->save();

            // Asociar habilidades al Pokémon
            $pokemon->habilidades()->attach([
                Habilidad::where('nombre', 'Espesura')->value('id')
            ]);
           
            // Asociar el tipo de Pokémon
            $pokemon->tipos()->attach([
                Tipo::where('nombre', 'Planta')->value('id'),
                Tipo::where('nombre', 'Veneno')->value('id')
            ]);     
            
             // Asociar debilidades al Pokémon
             $pokemon->debilidades()->attach([
                Tipo::where('nombre', 'Fuego')->value('id'),
                Tipo::where('nombre', 'Hielo')->value('id'),
                Tipo::where('nombre', 'Volador')->value('id'),
                Tipo::where('nombre', 'Psíquico')->value('id')
            ]);
    
            $estadisticas = new Estadistica();
            $estadisticas->pokemon_id = $pokemon->id; // Asociar el ID del nuevo Pokémon
            $estadisticas->ataque = 3;
            $estadisticas->defensa = 3;
            $estadisticas->velocidad = 3;
            $estadisticas->vida = 70;
            $estadisticas->save();

            //Evolucion 1
            $evolucion = new Evolucion();
            $evolucion->pokemon_id=$pokemon->id;
            $evolucion->codigo = '0002';
            $evolucion->nombre = 'Ivysaur';
            $evolucion->genero_id = 1;//macho
            $evolucion->altura =3.03;
            $evolucion->peso = 28.7;
            $evolucion->orden= 1;
            $evolucion->imagen = 'ivysaur.jpg';
            $evolucion->save();

            // Asociar habilidades al Pokémon
            $evolucion->habilidades()->attach([
                Habilidad::where('nombre', 'Espesura')->value('id')
            ]);
           
            // Asociar el tipo de Pokémon
            $evolucion->tipos()->attach([
                Tipo::where('nombre', 'Planta')->value('id'),
                Tipo::where('nombre', 'Veneno')->value('id')
            ]);     
            
             // Asociar debilidades al Pokémon
             $evolucion->debilidades()->attach([
                Tipo::where('nombre', 'Fuego')->value('id'),
                Tipo::where('nombre', 'Hielo')->value('id'),
                Tipo::where('nombre', 'Volador')->value('id'),
                Tipo::where('nombre', 'Psíquico')->value('id')
            ]);
    
            $estadisticas = new Estadistica();
            $estadisticas->evolucion_id = $evolucion->id; // Asociar el ID de la evolución
            $estadisticas->ataque = 4;
            $estadisticas->defensa = 4;
            $estadisticas->velocidad = 4;
            $estadisticas->vida = 100;
            $estadisticas->save();

            
            
        });      

       
    }
}
