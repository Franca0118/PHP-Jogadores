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
        Schema::create('jogadores', function (Blueprint $jogadores) {
            $jogadores->id();
            $jogadores->timestamps();

            $jogadores->string("nomeJogador");
            $jogadores->string("nacionalidadeJogador");
            $jogadores->string("numCamisaJogador");
            $jogadores->string("timeJogador");
            $jogadores->string("numCartoesJogador");
            $jogadores->string("numLesoesJogador");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schemma::dropIfExists('jogadores');
    }
};
