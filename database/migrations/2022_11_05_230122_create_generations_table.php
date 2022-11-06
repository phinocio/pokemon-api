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
        Schema::create('generations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('new_pokemon');
            $table->unsignedInteger('total_pokemon');
            $table->unsignedInteger('new_moves');
            $table->unsignedInteger('total_moves');
            $table->unsignedInteger('new_abilities')->default(0);
            $table->unsignedInteger('total_abilities')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generations');
    }
};
