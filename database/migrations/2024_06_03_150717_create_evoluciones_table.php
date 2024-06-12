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
        Schema::create('evoluciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pokemon_id')->constrained('pokemons','id')->onDelete('CASCADE');
            $table->foreignId('genero_id')->constrained();
            $table->string('codigo')->unique();
            $table->string('nombre');
            $table->double('altura');
            $table->double('peso');
            $table->integer('orden');
            $table->string('imagen');
            $table->string('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evoluciones');
    }
};
