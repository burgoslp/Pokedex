<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $fillable = [
        'genero_id',
        'nombre',
        'altura',
        'peso',
        'imagen',
        'descripcion',
    ];
    protected $table="pokemons";


    public function evoluciones(){

        return $this->hasMany(Evolucion::class);
    }

    public function estadisticas(){
        return $this->hasOne(Estadistica::class,'pokemon_id');
    }

    public function habilidades(){

        return $this->belongsToMany(Habilidad::class, 'habilidad_pokemon','pokemon_id','habilidad_id');

    }

    public function tipos(){

        return $this->belongsToMany(Tipo::class, 'tipo_pokemon','pokemon_id','tipo_id');

    }

    public function debilidades(){

        return $this->belongsToMany(Tipo::class, 'debilidad_pokemon','pokemon_id','tipo_id');

    }

    public function validaEspecie($codigo){
        $especimen=$this->where('codigo',$codigo)->get();

        foreach( $especimen as $especie){
            if($especie->codigo){
                return 0;//pokemon base
            }           
        }
        return 1;//evolución
    }

}
