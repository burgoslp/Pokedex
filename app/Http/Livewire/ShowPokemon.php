<?php

namespace App\Http\Livewire;
use App\Models\Pokemon;
use Livewire\Component;

class ShowPokemon extends Component
{
    public $pokemon;

    public function mostrarPokemon($id)
    {
        $this->pokemon = Pokemon::find($id); // Asumiendo que tienes un modelo Pokemon
    }
    public function render()
    {
        return view('livewire.show-pokemon',['pokemon' => $this->pokemon]);
    }
}
