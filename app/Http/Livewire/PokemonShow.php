<?php

namespace App\Http\Livewire;

use App\Models\Pokemon;
use Livewire\Component;
use App\Models\Evolucion;

class PokemonShow extends Component
{

    public $codigo="";
    public $lstData;
    public $especimen;

    public function mount(){
        $this->lstData();
    }

    public function lstData(){
        
        $pokemon=Pokemon::select('nombre','codigo');
        $evoluciones=Evolucion::select('nombre','codigo');

        if(!empty($this->codigo)){
            $pokemon->where('codigo','like','%'.$this->codigo.'%');
            
            $evoluciones->where('codigo','like','%'.$this->codigo.'%');
        }

          
        $this->lstData= $evoluciones->union($pokemon)->orderBy('codigo', 'asc')->limit(4)->get();
    }

    public function render()
    {
        return view('livewire.pokemon-show',);
    }
}
