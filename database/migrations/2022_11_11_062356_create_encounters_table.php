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
        Schema::create('encounters', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('location_id')->nullable();
			$table->unsignedBigInteger('pokemon_id');
			$table->unsignedBigInteger('game_id');
			$table->unsignedBigInteger('encounter_type_id');

			$table->foreign('location_id')->references('id')->on('locations');
			$table->foreign('pokemon_id')->references('id')->on('pokemon');
			$table->foreign('game_id')->references('id')->on('games');
			$table->foreign('encounter_type_id')->references('id')->on('encounter_types');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encounters');
    }
};
