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
        Schema::create('alineacions', function (Blueprint $table) {
            $table->id();
            $table->string('esquema');
            $table->foreignId('equip_fantasy_id')->constrained('equips_fantasy')->onDelete('cascade');
            $table->foreignId('jornada_id')->constrained('jornades')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alineacions');
    }
};
