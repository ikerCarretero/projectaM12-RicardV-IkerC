<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jornades', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('numero');
            $table->string('nom')->nullable();
            $table->date('data_inici');
            $table->date('data_fi');
            $table->string('estat')->default('pendent');
            $table->foreignId('competicio_id')->constrained('competicions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jornades');
    }
};