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
    Schema::create('musicas_albuns_ou_playlists', function (Blueprint $table) {
        $table->foreignId('musicas_id')->constrained('musicas')->onDelete('cascade');
        $table->foreignId('albuns_ou_playlists_id')->constrained('albuns_ou_playlists')->onDelete('cascade');
        $table->primary(['musicas_id', 'albuns_ou_playlists_id']);
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musicas_albuns_ou_playlists');
    }
};
