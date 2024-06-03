<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estadisticas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pokemon_id')->nullable()->constrained('pokemons','id')->onDelete("CASCADE");
            $table->foreignId('evolucion_id')->nullable()->constrained('evoluciones','id')->onDelete("CASCADE");
            $table->integer('ataque');
            $table->integer('defensa');
            $table->integer('velocidad');
            $table->integer('vida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estadisticas');
    }
};
