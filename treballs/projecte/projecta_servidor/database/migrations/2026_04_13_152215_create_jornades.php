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
        Schema::create('jornades', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->date('data_inici');
            $table->date('data_fi');
            $table->foreignId('competicio_id')->constrained('competicions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jornades');
    }
};
