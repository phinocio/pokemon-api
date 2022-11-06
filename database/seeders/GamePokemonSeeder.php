<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamePokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('game_pokemon')->insert([
			'game_id' => 1,
			'pokemon_id' => 1
		],
		);

		DB::table('game_pokemon')->insert([
			'game_id' => 1,
			'pokemon_id' => 2
		],
		);

		DB::table('game_pokemon')->insert([
			'game_id' => 1,
			'pokemon_id' => 3
		],
		);

		DB::table('game_pokemon')->insert([
			'game_id' => 1,
			'pokemon_id' => 4
		],
		);

		DB::table('game_pokemon')->insert([
			'game_id' => 1,
			'pokemon_id' => 5
		],
		);

		DB::table('game_pokemon')->insert([
			'game_id' => 1,
			'pokemon_id' => 6
		],
		);


    }
}
