<?php

namespace App\Http\Controllers;

use App\Models\Evolucion;
use App\Models\Pokemon;
use App\Models\Tipo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

       return view('index');
    }
}
