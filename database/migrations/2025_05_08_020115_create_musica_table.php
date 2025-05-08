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
        Schema::create('musica', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('duracao'); // em segundos
            $table->foreignId('artistas_id')->constrained('artistas')->onDelete('cascade');
            $table->foreignId('album_id')->nullable()->constrained('album')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musica');
    }
};
