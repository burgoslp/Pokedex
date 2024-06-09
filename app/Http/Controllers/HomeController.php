<?php

namespace App\Http\Controllers;

use App\Models\Evolucion;
use App\Models\Pokemon;
use App\Models\Tipo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $tipos=Tipo::all();

        $evoluciones= Evolucion::select('id','nombre','codigo','imagen');
        $pokemons= Pokemon::select('id','nombre','codigo','imagen')->union($evoluciones)->orderBy('codigo','asc')->limit(6)->get();


        
        return view('index',compact('pokemons','tipos'));
    }
}
