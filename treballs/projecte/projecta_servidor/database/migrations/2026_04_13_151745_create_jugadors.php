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
        Schema::create('jugadors', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->enum('posicio_base', ['Porter', 'Defensa', 'Migcampista', 'Davanter']);
            $table->decimal('valor_mercat', 15, 2);
            $table->integer('puntuacio_total')->default(0);
            $table->foreignId('equip_real_id')->constrained('equips_reals')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugadors');
    }
};
