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
        Schema::create('game_region', function (Blueprint $table) {
			$table->id();
            $table->unsignedBigInteger('game_id');
			$table->unsignedBigInteger('region_id');

			$table->foreign('game_id')->references('id')->on('games');
			$table->foreign('region_id')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_region');
    }
};
