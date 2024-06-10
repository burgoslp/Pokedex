<?php

namespace App\Http\Livewire;

use App\Models\Pokemon;
use App\Models\Evolucion;
use App\Models\Tipo;
use Livewire\WithPagination;
use Livewire\Component;

class BuscadorPokemon extends Component
{
    use WithPagination;

    public $tipo_id;
    public $nombre;  

    public function tiposAll(){
        $tipos=Tipo::all();
        return $tipos;
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
        //dd($evoluciones->union($pokemon)->orderBy('codigo', 'asc')->toSql());        
        return $evoluciones->union($pokemon)->orderBy('codigo', 'asc')->paginate(6);
    }

    public function mostrarDetalles($id){

        dd($id);
    }

    public function render()
    {
        return view('livewire.buscador-pokemon',['pokemons'=>$this->buscar(),'tipos'=>$this->tiposAll()]);
    }
}
