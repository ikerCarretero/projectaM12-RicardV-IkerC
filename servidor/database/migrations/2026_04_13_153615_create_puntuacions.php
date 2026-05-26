<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('puntuacions', function (Blueprint $table) {
            $table->id();
            $table->integer('punts_total')->default(0);
            $table->foreignId('equip_fantasy_id')->constrained('equips_fantasy')->onDelete('cascade');
            $table->foreignId('lliga_privada_id')->constrained('lligues_privades')->onDelete('cascade');
            $table->foreignId('jornada_id')->nullable()->constrained('jornades')->nullOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('puntuacions');
    }
};