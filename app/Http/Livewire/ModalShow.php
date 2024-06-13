<?php

namespace App\Http\Livewire;

use App\Models\Pokemon;
use App\Models\Evolucion;
use Livewire\Component;

class ModalShow extends Component
{
    protected $listeners = ['abrirModal' => 'abrirModal'];
    public $estadoModal = false;
    public $especie;
    public $chartLabels;
    public $chartData;
    public $chartnombre;



    public function abrirModal($data)
    {
        $this->estadoModal = true;

        $this->detalles($data);
         $this->emit('openModal');
    }

    public function cerrarModal()
    {
        $this->estadoModal = false;
    }

    public function detalles($data)
    {
        if ($data['tipo'] == 1) { //evolucion
            $especie = Evolucion::find($data['id']);
        } else { //0 = base pokemon
            $especie = Pokemon::find($data['id']);
        }

        $this->especie = $especie;
        $this->initializeChart();
        
    }

    public function initializeChart()
    {
        $this->chartnombre ='Estadisticas';
        $this->chartLabels =['labels'=>['Ataque', 'Defensa', 'Velocidad','Vida']];   
        $this->chartData= ['data'=>[3,3,5,70]];
    }   

    public function color($idTipo)
    {
        switch ($idTipo) {
            case '1': //normal
                return "bg-slate-600";
                break;

            case '2': //lucha
                return "bg-gray-600";
                break;

            case '3': //volador
                return "bg-zinc-400";

                break;

            case '4': //veneno
                return "bg-indigo-800";
                break;

            case '5': //tierra
                return "bg-amber-900";
                break;

            case '6': //roca
                return "bg-yello-950";
                break;

            case '7': //bicho
                return "bg-lime-400";
                break;

            case '8': //fantasma
                return "bg-purple-900";
                break;

            case '9': //acero
                return "bg-gray-400";
                break;

            case '10': //fuego
                return "bg-orange-400";
                break;

            case '11': //agua
                return "bg-blue-600";
                break;

            case '12': //planta
                return "bg-green-600";
                break;

            case '13': //electrico
                return "bg-yellow-400";
                break;

            case '14': //psiquico
                return "bg-pink-400";
                break;

            case '15': //hielo
                return "bg-sky-400";
                break;

            case '16': //dragon
                return "bg-rose-600";
                break;

            case '17': //hada
                return "bg-fuchsia-500";
                break;

            case '18': //siniestro
                return "bg-fuchsia-950";
                break;
        }
        return $idTipo;
    }
    public function render()
    {
        return view('livewire.modal-show');
    }
}
