<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadistica extends Model
{
    use HasFactory;

    protected $fillable=[
        'pokemon_id',
        'evolucion_id',
        'ataque',
        'defensa',
        'velocidad',
        'vida'
    ];
    protected $table="estadisticas";
}
