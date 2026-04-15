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
        Schema::create('partits', function (Blueprint $table) {
            $table->id();
            $table->dateTime('data_hora');
            $table->string('resultat')->nullable();
            $table->foreignID('jornada_id')->constrained('jornades')->onDelete('cascade');
            $table->foreignId('equip_local_id')->constrained('equips_reals')->onDelete('cascade');
            $table->foreignId('equip_visitant_id')->constrained('equips_reals')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partits');
    }
};
