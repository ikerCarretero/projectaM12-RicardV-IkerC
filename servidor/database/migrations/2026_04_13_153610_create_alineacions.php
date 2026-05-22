<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('alineacions', function (Blueprint $table) {
            $table->id();
            $table->string('esquema');
            $table->foreignId('equip_fantasy_id')->constrained('equips_fantasy')->onDelete('cascade');
            $table->foreignId('jornada_id')->nullable()->constrained('jornades')->nullOnDelete();
            $table->timestamps();

            $table->unique(['equip_fantasy_id', 'jornada_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alineacions');
    }
};