<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $pokemons= Pokemon::all();
        return view('index',compact('pokemons'));
    }
}
