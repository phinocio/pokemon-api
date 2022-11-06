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
        Schema::create('releases', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('game_id');
			$table->unsignedBigInteger('country_id');
			$table->unsignedBigInteger('platform_id');
			$table->timestamp('release_date');

			$table->foreign('game_id')->references('id')->on('games');
			$table->foreign('country_id')->references('id')->on('countries');
			$table->foreign('platform_id')->references('id')->on('platforms');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('releases_dates');
    }
};
