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
            $pokemon->imagen = 'bulbasaur';
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
            $evolucion->imagen = 'ivysaur';
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


             //Evolucion 2
             $evolucion = new Evolucion();
             $evolucion->pokemon_id=$pokemon->id;
             $evolucion->codigo = '0003';
             $evolucion->nombre = 'Venusaur';
             $evolucion->genero_id = 1;//macho
             $evolucion->altura =6.07;
             $evolucion->peso = 220.5;
             $evolucion->orden= 2;
             $evolucion->imagen = 'venusaur';
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
             $estadisticas->ataque = 5;
             $estadisticas->defensa = 5;
             $estadisticas->velocidad = 5;
             $estadisticas->vida = 220;
             $estadisticas->save();            
            
        }); 
        
        
        DB::transaction(function () {
            //Pokemon base 1
            $pokemon = new Pokemon();
            $pokemon->codigo = '0004';
            $pokemon->nombre = 'Charmander';
            $pokemon->genero_id = 1;//macho
            $pokemon->altura = 2;
            $pokemon->peso = 18.7;
            $pokemon->imagen = 'charmander';
            $pokemon->save();

            // Asociar habilidades al Pokémon
            $pokemon->habilidades()->attach([
                Habilidad::where('nombre', 'Mar llamas')->value('id')
            ]);
           
            // Asociar el tipo de Pokémon
            $pokemon->tipos()->attach([
                Tipo::where('nombre', 'Fuego')->value('id')
            ]);     
            
             // Asociar debilidades al Pokémon
             $pokemon->debilidades()->attach([
                Tipo::where('nombre', 'Agua')->value('id'),
                Tipo::where('nombre', 'Tierra')->value('id'),
                Tipo::where('nombre', 'Roca')->value('id')
            ]);
    
            $estadisticas = new Estadistica();
            $estadisticas->pokemon_id = $pokemon->id; // Asociar el ID del nuevo Pokémon
            $estadisticas->ataque = 4;
            $estadisticas->defensa = 3;
            $estadisticas->velocidad = 4;
            $estadisticas->vida = 70;
            $estadisticas->save();

            //Evolucion 1
            $evolucion = new Evolucion();
            $evolucion->pokemon_id=$pokemon->id;
            $evolucion->codigo = '0005';
            $evolucion->nombre = 'Charmeleon';
            $evolucion->genero_id = 1;//macho
            $evolucion->altura =3.07;
            $evolucion->peso = 41.9;
            $evolucion->orden= 1;
            $evolucion->imagen = 'charmeleon';
            $evolucion->save();

            // Asociar habilidades al Pokémon
            $evolucion->habilidades()->attach([
                Habilidad::where('nombre', 'Mar llamas')->value('id')
            ]);
           
            // Asociar el tipo de Pokémon
            $evolucion->tipos()->attach([
                Tipo::where('nombre', 'Fuego')->value('id'),
            ]);     
            
             // Asociar debilidades al Pokémon
             $evolucion->debilidades()->attach([
                Tipo::where('nombre', 'Agua')->value('id'),
                Tipo::where('nombre', 'Tierra')->value('id'),
                Tipo::where('nombre', 'Roca')->value('id')
            ]);
    
            $estadisticas = new Estadistica();
            $estadisticas->evolucion_id = $evolucion->id; // Asociar el ID de la evolución
            $estadisticas->ataque = 4;
            $estadisticas->defensa = 4;
            $estadisticas->velocidad = 5;
            $estadisticas->vida = 90;
            $estadisticas->save();


             //Evolucion 2
             $evolucion = new Evolucion();
             $evolucion->pokemon_id=$pokemon->id;
             $evolucion->codigo = '0006';
             $evolucion->nombre = 'Charizard';
             $evolucion->genero_id = 1;//macho
             $evolucion->altura =5.07;
             $evolucion->peso = 199.5;
             $evolucion->orden= 2;
             $evolucion->imagen = 'charizard';
             $evolucion->save();
 
             // Asociar habilidades al Pokémon
             $evolucion->habilidades()->attach([
                 Habilidad::where('nombre', 'Mar llamas')->value('id')
             ]);
            
             // Asociar el tipo de Pokémon
             $evolucion->tipos()->attach([
                 Tipo::where('nombre', 'Fuego')->value('id'),
                 Tipo::where('nombre', 'Volador')->value('id')
             ]);     
             
              // Asociar debilidades al Pokémon
              $evolucion->debilidades()->attach([
                 Tipo::where('nombre', 'Agua')->value('id'),
                 Tipo::where('nombre', 'Electrico')->value('id'),
                 Tipo::where('nombre', 'Roca')->value('id')
             ]);
     
             $estadisticas = new Estadistica();
             $estadisticas->evolucion_id = $evolucion->id; // Asociar el ID de la evolución
             $estadisticas->ataque = 5;
             $estadisticas->defensa = 5;
             $estadisticas->velocidad = 6;
             $estadisticas->vida = 250;
             $estadisticas->save();            
            
        });     

        DB::transaction(function () {
            //Pokemon base 1
            $pokemon = new Pokemon();
            $pokemon->codigo = '0007';
            $pokemon->nombre = 'Squirtle';
            $pokemon->genero_id = 1;//macho
            $pokemon->altura = 1.08;
            $pokemon->peso = 19.8;
            $pokemon->imagen = 'squirtle';
            $pokemon->save();

            // Asociar habilidades al Pokémon
            $pokemon->habilidades()->attach([
                Habilidad::where('nombre', 'Torrente')->value('id')
            ]);
           
            // Asociar el tipo de Pokémon
            $pokemon->tipos()->attach([
                Tipo::where('nombre', 'Agua')->value('id')
            ]);     
            
             // Asociar debilidades al Pokémon
             $pokemon->debilidades()->attach([
                Tipo::where('nombre', 'Planta')->value('id'),
                Tipo::where('nombre', 'Electrico')->value('id')
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
            $evolucion->codigo = '0008';
            $evolucion->nombre = 'Wartortle';
            $evolucion->genero_id = 1;//macho
            $evolucion->altura =3.03;
            $evolucion->peso = 49.6;
            $evolucion->orden= 1;
            $evolucion->imagen = 'wartortle';
            $evolucion->save();

            // Asociar habilidades al Pokémon
            $evolucion->habilidades()->attach([
                Habilidad::where('nombre', 'Torrente')->value('id')
            ]);
           
            // Asociar el tipo de Pokémon
            $evolucion->tipos()->attach([
                Tipo::where('nombre', 'Agua')->value('id'),
            ]);     
            
             // Asociar debilidades al Pokémon
             $evolucion->debilidades()->attach([
                Tipo::where('nombre', 'Planta')->value('id'),
                Tipo::where('nombre', 'Electrico')->value('id')
            ]);
    
            $estadisticas = new Estadistica();
            $estadisticas->evolucion_id = $evolucion->id; // Asociar el ID de la evolución
            $estadisticas->ataque = 4;
            $estadisticas->defensa = 4;
            $estadisticas->velocidad = 4;
            $estadisticas->vida = 100;
            $estadisticas->save();


             //Evolucion 2
             $evolucion = new Evolucion();
             $evolucion->pokemon_id=$pokemon->id;
             $evolucion->codigo = '0009';
             $evolucion->nombre = 'blastoise';
             $evolucion->genero_id = 1;//macho
             $evolucion->altura =5.03;
             $evolucion->peso = 188.5;
             $evolucion->orden= 2;
             $evolucion->imagen = 'blastoise';
             $evolucion->save();
 
             // Asociar habilidades al Pokémon
             $evolucion->habilidades()->attach([
                 Habilidad::where('nombre', 'Torrente')->value('id')
             ]);
            
             // Asociar el tipo de Pokémon
             $evolucion->tipos()->attach([
                 Tipo::where('nombre', 'Agua')->value('id')
             ]);     
             
              // Asociar debilidades al Pokémon
              $evolucion->debilidades()->attach([
                 Tipo::where('nombre', 'Planta')->value('id'),
                 Tipo::where('nombre', 'Electrico')->value('id')
             ]);
     
             $estadisticas = new Estadistica();
             $estadisticas->evolucion_id = $evolucion->id; // Asociar el ID de la evolución
             $estadisticas->ataque = 5;
             $estadisticas->defensa = 5;
             $estadisticas->velocidad = 5;
             $estadisticas->vida = 240;
             $estadisticas->save();            
            
        }); 


        DB::transaction(function () {
            //Pokemon base 1
            $pokemon = new Pokemon();
            $pokemon->codigo = '0010';
            $pokemon->nombre = 'Caterpie';
            $pokemon->genero_id = 1;//macho
            $pokemon->altura = 1;
            $pokemon->peso = 6.4;
            $pokemon->imagen = 'caterpie';
            $pokemon->save();

            // Asociar habilidades al Pokémon
            $pokemon->habilidades()->attach([
                Habilidad::where('nombre', 'Polvo escudo')->value('id')
            ]);
           
            // Asociar el tipo de Pokémon
            $pokemon->tipos()->attach([
                Tipo::where('nombre', 'Bicho')->value('id')
            ]);     
            
             // Asociar debilidades al Pokémon
             $pokemon->debilidades()->attach([
                Tipo::where('nombre', 'Fuego')->value('id'),
                Tipo::where('nombre', 'Volador')->value('id'),
                Tipo::where('nombre', 'Roca')->value('id')
            ]);
    
            $estadisticas = new Estadistica();
            $estadisticas->pokemon_id = $pokemon->id; // Asociar el ID del nuevo Pokémon
            $estadisticas->ataque = 2;
            $estadisticas->defensa = 2;
            $estadisticas->velocidad = 3;
            $estadisticas->vida = 50;
            $estadisticas->save();

            //Evolucion 1
            $evolucion = new Evolucion();
            $evolucion->pokemon_id=$pokemon->id;
            $evolucion->codigo = '0011';
            $evolucion->nombre = 'Metapod';
            $evolucion->genero_id = 1;//macho
            $evolucion->altura = 2.04;
            $evolucion->peso = 21.8;
            $evolucion->orden= 1;
            $evolucion->imagen = 'metapod';
            $evolucion->save();

            // Asociar habilidades al Pokémon
            $evolucion->habilidades()->attach([
                Habilidad::where('nombre', 'Mudar')->value('id')
            ]);
           
            // Asociar el tipo de Pokémon
            $evolucion->tipos()->attach([
                Tipo::where('nombre', 'Bicho')->value('id'),
            ]);     
            
             // Asociar debilidades al Pokémon
             $evolucion->debilidades()->attach([
                Tipo::where('nombre', 'Fuego')->value('id'),
                Tipo::where('nombre', 'Volador')->value('id'),
                Tipo::where('nombre', 'Roca')->value('id')
            ]);
    
            $estadisticas = new Estadistica();
            $estadisticas->evolucion_id = $evolucion->id; // Asociar el ID de la evolución
            $estadisticas->ataque = 2;
            $estadisticas->defensa = 2;
            $estadisticas->velocidad = 2;
            $estadisticas->vida = 80;
            $estadisticas->save();


             //Evolucion 2
             $evolucion = new Evolucion();
             $evolucion->pokemon_id=$pokemon->id;
             $evolucion->codigo = '0009';
             $evolucion->nombre = 'Butterfree';
             $evolucion->genero_id = 1;//macho
             $evolucion->altura =3.07;
             $evolucion->peso = 70.5;
             $evolucion->orden= 2;
             $evolucion->imagen = 'butterfree';
             $evolucion->save();
 
             // Asociar habilidades al Pokémon
             $evolucion->habilidades()->attach([
                 Habilidad::where('nombre', 'Torrente')->value('id')
             ]);
            
             // Asociar el tipo de Pokémon
             $evolucion->tipos()->attach([
                 Tipo::where('nombre', 'Agua')->value('id')
             ]);     
             
              // Asociar debilidades al Pokémon
              $evolucion->debilidades()->attach([
                 Tipo::where('nombre', 'Planta')->value('id'),
                 Tipo::where('nombre', 'Electrico')->value('id')
             ]);
     
             $estadisticas = new Estadistica();
             $estadisticas->evolucion_id = $evolucion->id; // Asociar el ID de la evolución
             $estadisticas->ataque = 5;
             $estadisticas->defensa = 5;
             $estadisticas->velocidad = 5;
             $estadisticas->vida = 240;
             $estadisticas->save();            
            
        }); 


        DB::transaction(function () {
            //Pokemon base 1
            $pokemon = new Pokemon();
            $pokemon->codigo = '0013';
            $pokemon->nombre = 'Weedle';
            $pokemon->genero_id = 1;//macho
            $pokemon->altura = 1;
            $pokemon->peso = 7.1;
            $pokemon->imagen = 'weedle';
            $pokemon->save();

            // Asociar habilidades al Pokémon
            $pokemon->habilidades()->attach([
                Habilidad::where('nombre', 'Polvo escudo')->value('id')
            ]);
           
            // Asociar el tipo de Pokémon
            $pokemon->tipos()->attach([
                Tipo::where('nombre', 'Bicho')->value('id'),
                Tipo::where('nombre', 'Veneno')->value('id'),
            ]);     
            
             // Asociar debilidades al Pokémon
             $pokemon->debilidades()->attach([
                Tipo::where('nombre', 'fuego')->value('id'),
                Tipo::where('nombre', 'Volador')->value('id'),
                Tipo::where('nombre', 'Psíquico')->value('id'),
                Tipo::where('nombre', 'Roca')->value('id'),
            ]);
    
            $estadisticas = new Estadistica();
            $estadisticas->pokemon_id = $pokemon->id; // Asociar el ID del nuevo Pokémon
            $estadisticas->ataque = 3;
            $estadisticas->defensa = 2;
            $estadisticas->velocidad = 3;
            $estadisticas->vida = 40;
            $estadisticas->save();

            //Evolucion 1
            $evolucion = new Evolucion();
            $evolucion->pokemon_id=$pokemon->id;
            $evolucion->codigo = '0014';
            $evolucion->nombre = 'Kakuna';
            $evolucion->genero_id = 1;//macho
            $evolucion->altura = 2;
            $evolucion->peso = 22;
            $evolucion->orden= 1;
            $evolucion->imagen = 'kakuna';
            $evolucion->save();

            // Asociar habilidades al Pokémon
            $evolucion->habilidades()->attach([
                Habilidad::where('nombre', 'Polvo escudo')->value('id')
            ]);
           
            // Asociar el tipo de Pokémon
            $evolucion->tipos()->attach([
                Tipo::where('nombre', 'Bicho')->value('id'),
                Tipo::where('nombre', 'Veneno')->value('id'),
            ]);     
            
             // Asociar debilidades al Pokémon
             $evolucion->debilidades()->attach([
                Tipo::where('nombre', 'fuego')->value('id'),
                Tipo::where('nombre', 'Volador')->value('id'),
                Tipo::where('nombre', 'Psíquico')->value('id'),
                Tipo::where('nombre', 'Roca')->value('id'),
            ]);
    
            $estadisticas = new Estadistica();
            $estadisticas->evolucion_id = $evolucion->id; // Asociar el ID de la evolución
            $estadisticas->ataque = 2;
            $estadisticas->defensa = 2;
            $estadisticas->velocidad = 3;
            $estadisticas->vida = 70;
            $estadisticas->save();


             //Evolucion 2
             $evolucion = new Evolucion();
             $evolucion->pokemon_id=$pokemon->id;
             $evolucion->codigo = '0015';
             $evolucion->nombre = 'Beedrill';
             $evolucion->genero_id = 1;//macho
             $evolucion->altura =3.03;
             $evolucion->peso = 65;
             $evolucion->orden= 2;
             $evolucion->imagen = 'beedrill';
             $evolucion->save();
 
             // Asociar habilidades al Pokémon
             $evolucion->habilidades()->attach([
                 Habilidad::where('nombre', 'Ejambre')->value('id')
             ]);
            
             // Asociar el tipo de Pokémon
             $evolucion->tipos()->attach([
                Tipo::where('nombre', 'Bicho')->value('id'),
                Tipo::where('nombre', 'Veneno')->value('id'),
             ]);     
             
              // Asociar debilidades al Pokémon
              $evolucion->debilidades()->attach([
                Tipo::where('nombre', 'fuego')->value('id'),
                Tipo::where('nombre', 'Volador')->value('id'),
                Tipo::where('nombre', 'Psíquico')->value('id'),
                Tipo::where('nombre', 'Roca')->value('id'),
             ]);
     
             $estadisticas = new Estadistica();
             $estadisticas->evolucion_id = $evolucion->id; // Asociar el ID de la evolución
             $estadisticas->ataque = 6;
             $estadisticas->defensa = 3;
             $estadisticas->velocidad = 5;
             $estadisticas->vida = 160;
             $estadisticas->save();            
            
        });
       

        DB::transaction(function () {
            //Pokemon base 1
            $pokemon = new Pokemon();
            $pokemon->codigo = '0016';
            $pokemon->nombre = 'Pidgey';
            $pokemon->genero_id = 1;//macho
            $pokemon->altura = 1;
            $pokemon->peso = 4;
            $pokemon->imagen = 'pidgey';
            $pokemon->save();

            // Asociar habilidades al Pokémon
            $pokemon->habilidades()->attach([
                Habilidad::where('nombre', 'Vista lince')->value('id'),
                Habilidad::where('nombre', 'Tumbos')->value('id'),
            ]);
           
            // Asociar el tipo de Pokémon
            $pokemon->tipos()->attach([
                Tipo::where('nombre', 'Normal')->value('id'),
                Tipo::where('nombre', 'Volador')->value('id'),
            ]);     
            
             // Asociar debilidades al Pokémon
             $pokemon->debilidades()->attach([
                Tipo::where('nombre', 'Electrico')->value('id'),
                Tipo::where('nombre', 'Hielo')->value('id'),
                Tipo::where('nombre', 'Roca')->value('id'),
            ]);
    
            $estadisticas = new Estadistica();
            $estadisticas->pokemon_id = $pokemon->id; // Asociar el ID del nuevo Pokémon
            $estadisticas->ataque = 3;
            $estadisticas->defensa = 3;
            $estadisticas->velocidad = 4;
            $estadisticas->vida = 60;
            $estadisticas->save();

            //Evolucion 1
            $evolucion = new Evolucion();
            $evolucion->pokemon_id=$pokemon->id;
            $evolucion->codigo = '0017';
            $evolucion->nombre = 'Pidgeotto';
            $evolucion->genero_id = 1;//macho
            $evolucion->altura = 3.07;
            $evolucion->peso = 66.1;
            $evolucion->orden= 1;
            $evolucion->imagen = 'pidgeotto';
            $evolucion->save();

            // Asociar habilidades al Pokémon
            $evolucion->habilidades()->attach([
                Habilidad::where('nombre', 'Vista lince')->value('id'),
                Habilidad::where('nombre', 'Tumbos')->value('id'),
            ]);
           
            // Asociar el tipo de Pokémon
            $evolucion->tipos()->attach([
                Tipo::where('nombre', 'Normal')->value('id'),
                Tipo::where('nombre', 'Volador')->value('id'),
            ]);     
            
             // Asociar debilidades al Pokémon
             $evolucion->debilidades()->attach([
                Tipo::where('nombre', 'Electrico')->value('id'),
                Tipo::where('nombre', 'Hielo')->value('id'),
                Tipo::where('nombre', 'Roca')->value('id'),
            ]);
    
            $estadisticas = new Estadistica();
            $estadisticas->evolucion_id = $evolucion->id; // Asociar el ID de la evolución
            $estadisticas->ataque = 4;
            $estadisticas->defensa = 4;
            $estadisticas->velocidad = 5;
            $estadisticas->vida = 80;
            $estadisticas->save();


             //Evolucion 2
             $evolucion = new Evolucion();
             $evolucion->pokemon_id=$pokemon->id;
             $evolucion->codigo = '0018';
             $evolucion->nombre = 'Pidgeot';
             $evolucion->genero_id = 1;//macho
             $evolucion->altura =4.11;
             $evolucion->peso = 87.1;
             $evolucion->orden= 2;
             $evolucion->imagen = 'pidgeot';
             $evolucion->save();
 
             // Asociar habilidades al Pokémon
             $evolucion->habilidades()->attach([
                Habilidad::where('nombre', 'Vista lince')->value('id'),
                Habilidad::where('nombre', 'Tumbos')->value('id'),
             ]);
            
             // Asociar el tipo de Pokémon
             $evolucion->tipos()->attach([
                Tipo::where('nombre', 'Normal')->value('id'),
                Tipo::where('nombre', 'Volador')->value('id'),
             ]);     
             
              // Asociar debilidades al Pokémon
              $evolucion->debilidades()->attach([
                Tipo::where('nombre', 'Electrico')->value('id'),
                Tipo::where('nombre', 'Hielo')->value('id'),
                Tipo::where('nombre', 'Roca')->value('id'),
             ]);
     
             $estadisticas = new Estadistica();
             $estadisticas->evolucion_id = $evolucion->id; // Asociar el ID de la evolución
             $estadisticas->ataque = 5;
             $estadisticas->defensa = 5;
             $estadisticas->velocidad = 6;
             $estadisticas->vida = 130;
             $estadisticas->save();            
            
        });
    }
}
