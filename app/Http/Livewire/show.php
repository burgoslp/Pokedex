<?php

namespace App\Http\Livewire;

use App\Models\Pokemon;
use Livewire\Component;
use App\Models\Evolucion;

class Show extends Component
{

    public $codigo="";
    public $lstData;
    public $pokemon="";

    

    public function lstData(){
        
        $pokemon=Pokemon::select('id','nombre','codigo','altura','peso','imagen','descripcion');
        $evoluciones=Evolucion::select('id','nombre','codigo','altura','peso','imagen','descripcion');

        if(!empty($this->codigo)){
            $pokemon->where('codigo','like','%'.$this->codigo.'%');
            
            $evoluciones->where('codigo','like','%'.$this->codigo.'%');
        }

          
        $resultados= $evoluciones->union($pokemon)->orderBy('codigo', 'asc')->limit(4)->get();
        $this->lstData=$resultados;
    }

    public function buscar(){
        $pokemons= Pokemon::where('codigo',$this->codigo)->get();

        foreach($pokemons as $pokemon){
            $this->pokemon=$pokemon;
        }

       
       
    }

    
    public function render()
    {
        return view('livewire.show');
    }
}
