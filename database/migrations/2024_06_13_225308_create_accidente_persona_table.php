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
        Schema::create('accidente_persona', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persona_id')->references('id')->on('personas');
            $table->foreignId('accidente_id')->references('id')->on('accidentes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona_has_accidente');
    }
};
