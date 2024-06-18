<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonsController extends Controller
{
    public function comparar($id){

        $especimen=Pokemon::find($id);
        return view('comparar',compact('especimen'));
    }
}
