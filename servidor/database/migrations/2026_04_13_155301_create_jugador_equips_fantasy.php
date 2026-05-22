<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jugador_equips_fantasy', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jugador_id')->constrained('jugadors')->onDelete('cascade');
            $table->foreignId('equip_fantasy_id')->constrained('equips_fantasy')->onDelete('cascade');
            $table->decimal('preu_fitxatge', 15, 2)->nullable();
            $table->timestamps();

            $table->unique(['jugador_id', 'equip_fantasy_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jugador_equips_fantasy');
    }
};