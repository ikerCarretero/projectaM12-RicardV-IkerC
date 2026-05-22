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
            $table->string('nacionalitat')->nullable();
            $table->string('posicio_base');
            $table->unsignedInteger('dorsal')->nullable();

            $table->unsignedInteger('partits_jugats')->default(0);
            $table->unsignedInteger('gols_marcats')->default(0);
            $table->unsignedInteger('gols_rebuts')->default(0);

            $table->string('img')->nullable();

            $table->bigInteger('valor_mercat')->default(0);
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
