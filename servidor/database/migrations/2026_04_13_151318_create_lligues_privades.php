<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lligues_privades', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('descripcio')->nullable();
            $table->string('codi_acces')->unique();
            $table->decimal('pressupost_inicial', 15, 2)->default(250000000);
            $table->unsignedInteger('maxim_participants')->default(10);
            $table->foreignId('creador_id')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lligues_privades');
    }
};