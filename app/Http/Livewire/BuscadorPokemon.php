<?php

namespace App\Http\Livewire;

use App\Models\Evolucion;
use Livewire\Component;
use App\Models\Pokemon;
class BuscadorPokemon extends Component
{
    public $pokemons;
    public $tipos;
    public $tipo_id;
    public $nombre;

    public function mount($pokemons,$tipos){
        $this->pokemons=$pokemons;
        $this->tipos=$tipos;
    }

    public function buscar(){
        $pokemon=Pokemon::select('id','nombre','codigo','imagen');
        $evoluciones=Evolucion::select('id','nombre','codigo','imagen');

        if(!empty($this->nombre)){
            $pokemon->where('nombre','like','%'.$this->nombre.'%');
            
            $evoluciones->where('nombre','like','%'.$this->nombre.'%');
        }

        if(!empty($this->tipo_id)){
            $tipo_id=$this->tipo_id;

            $pokemon->whereHas('tipos', function ($query) use ($tipo_id) {

                $query->where('tipos.id', $tipo_id);
            });

            $evoluciones->whereHas('tipos', function ($query) use ($tipo_id) {

                $query->where('tipos.id', $tipo_id);
            });

        }        
        
        
        
      
        $this->pokemons=$evoluciones->union($pokemon)->orderBy('codigo','asc')->limit(6)->get();
    }

    public function render()
    {
        return view('livewire.buscador-pokemon');
    }
}
