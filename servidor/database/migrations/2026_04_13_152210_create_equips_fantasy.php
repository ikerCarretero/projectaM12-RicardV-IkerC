<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('equips_fantasy', function (Blueprint $table) {
            $table->id();
            $table->string('nom_equip');
            $table->decimal('pressupost', 15, 2)->default(250000000);
            $table->foreignId('usuari_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('lliga_privada_id')->constrained('lligues_privades')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['usuari_id', 'lliga_privada_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('equips_fantasy');
    }
};