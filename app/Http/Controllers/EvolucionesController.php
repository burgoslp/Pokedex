<?php

namespace App\Http\Controllers;

use App\Models\Evolucion;
use Illuminate\Http\Request;

class EvolucionesController extends Controller
{
    public function show($id){
        
        $pokemon=Evolucion::find($id);
        return view('show',compact('pokemon'));
    }
}
