<?php

namespace App\Http\Controllers;

use App\Models\Evolucion;
use Illuminate\Http\Request;

class EvolucionesController extends Controller
{
    public function comparar($id){
        
        $especimen=Evolucion::find($id);
        return view('comparar',compact('especimen'));
    }
}
