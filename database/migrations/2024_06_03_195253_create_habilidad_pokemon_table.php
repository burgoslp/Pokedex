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
        Schema::create('habilidad_pokemon', function (Blueprint $table) {
            $table->id();
            $table->foreignId('habilidad_id')->constrained('tipos','id')->onDelete('CASCADE');
            $table->foreignId('pokemon_id')->nullable()->constrained('pokemons','id')->onDelete('CASCADE');
            $table->foreignId('evolucion_id')->nullable()->constrained('evoluciones','id')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habilidad_pokemon');
    }
};
