<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonsController extends Controller
{
    public function show($id){

        $pokemon=Pokemon::find($id);
        return view('show',compact('pokemon'));
    }
}
