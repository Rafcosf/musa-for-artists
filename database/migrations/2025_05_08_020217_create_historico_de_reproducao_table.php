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
        Schema::create('historico_reproducao', function (Blueprint $table) {
            $table->id();
            $table->timestamp('datahora');
            $table->unsignedInteger('contador')->default(1);
            $table->foreignId('ouvintes_id')->constrained('ouvintes')->onDelete('cascade');
            $table->foreignId('musica_id')->constrained('musica')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historico_de_reproducao');
    }
};
