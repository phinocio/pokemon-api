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
		Schema::create('evolutions', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('pokemon_id');
			$table->unsignedBigInteger('evolved_pokemon_id');
			$table->unsignedBigInteger('evolution_method_id');
			$table->unsignedBigInteger('item_id')->nullable();
			$table->unsignedInteger('level')->nullable();
			$table->boolean('trade')->default(false);
			$table->boolean('friendship')->default(false);

			$table->foreign('pokemon_id')->references('id')->on('pokemon');
			$table->foreign('evolved_pokemon_id')->references('id')->on('pokemon');
			$table->foreign('evolution_method_id')->references('id')->on('evolution_methods');
			$table->foreign('item_id')->references('id')->on('items');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('evolutions');
	}
};
