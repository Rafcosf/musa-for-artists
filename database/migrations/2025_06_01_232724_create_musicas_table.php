<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('musicas', function (Blueprint $table) {
        $table->id();
        $table->string('nome', 255);
        $table->time('duracao');
        $table->foreignId('artista_id')->constrained('users')->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musicas');
    }
};
