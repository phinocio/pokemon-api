<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_pokemon', function (Blueprint $table) {
			$table->id();
            $table->unsignedBigInteger('game_id');
			$table->unsignedBigInteger('pokemon_id');

			$table->foreign('game_id')->references('id')->on('games');
			$table->foreign('pokemon_id')->references('id')->on('pokemon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_pokemon');
    }
};
