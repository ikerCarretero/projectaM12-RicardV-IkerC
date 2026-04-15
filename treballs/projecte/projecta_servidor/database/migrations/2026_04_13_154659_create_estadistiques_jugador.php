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
        Schema::create('estadistiques_jugador', function (Blueprint $table) {
            $table->id();
            $table->integer('minuts_jugats')->default(0);
            $table->integer('gols')->default(0);
            $table->integer('assistencies')->default(0);
            $table->integer('targetes_grogues')->default(0);
            $table->integer('targetes_vermelles')->default(0);
            $table->integer('punts_jornada')->default(0);
            $table->foreignId('jugador_id')->constrained('jugadors')->onDelete('cascade');
            $table->foreignId('partit_id')->constrained('partits')->onDelete('cascade');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estadistiques_jugador');
    }
};
