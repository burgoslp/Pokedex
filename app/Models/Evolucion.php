<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evolucion extends Model
{
    use HasFactory;
    protected $fillable = [
        'genero_id',
        'nombre',
        'altura',
        'peso',
        'orden',
        'imagen',
        'descripcion',
    ];
    protected $table="evoluciones";

    public function estadisticas(){
        return $this->hasOne(Estadistica::class,'evolucion_id');
    }


    public function habilidades(){
        return $this->belongsToMany(Habilidad::class, 'habilidad_pokemon','evolucion_id','habilidad_id');

    }

    public function tipos(){

        return $this->belongsToMany(Tipo::class, 'tipo_pokemon','evolucion_id','tipo_id');
    }


    public function debilidades(){

        return $this->belongsToMany(Tipo::class, 'debilidad_pokemon','evolucion_id','tipo_id');

    }

    public function validaEspecie($codigo){
        $especimen=$this->where('codigo',$codigo)->get();

        foreach( $especimen as $especie){
            if($especie->codigo){
                return 1;//evolucion
            }           
        }
        return 0;//pokemon base
    }

}
