<?php

use App\Http\Controllers\EvolucionesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PokemonsController;
use App\Models\Evolucion;
use App\Models\Pokemon;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('buscador');
Route::get('/pokemon/show/{id}', [PokemonsController::class,'show'])->name('pokemon.show');
Route::get('/evolucion/show/{id}', [EvolucionesController::class,'show'])->name('evolucion.show');




