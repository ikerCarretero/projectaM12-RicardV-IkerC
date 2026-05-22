<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('estadistiques_jugador', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('minuts_jugats')->default(0);
            $table->boolean('partit_guanyat')->default(false);
            $table->unsignedSmallInteger('gols')->default(0);
            $table->unsignedSmallInteger('assistencies')->default(0);
            $table->unsignedSmallInteger('gols_propia')->default(0);
            $table->unsignedSmallInteger('parades_clau')->default(0);
            $table->unsignedSmallInteger('parades_normals')->default(0);
            $table->unsignedSmallInteger('faltes_fetes')->default(0);
            $table->unsignedSmallInteger('passes_completades')->default(0);
            $table->unsignedSmallInteger('targetes_grogues')->default(0);
            $table->unsignedSmallInteger('targetes_vermelles')->default(0);
            $table->unsignedSmallInteger('penaltis_comesos')->default(0);
            $table->unsignedSmallInteger('penaltis_provocats')->default(0);
            $table->integer('punts_jornada')->default(0);
            $table->foreignId('jugador_id')->constrained('jugadors')->onDelete('cascade');
            $table->foreignId('partit_id')->constrained('partits')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['jugador_id', 'partit_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estadistiques_jugador');
    }
};