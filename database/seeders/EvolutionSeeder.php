<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvolutionSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('evolutions')->insert([
			'pokemon_id' => 1,
			'evolved_pokemon_id' => 2,
			'evolution_method_id' => 1,
			'item_id' => null,
			'level' => 16
		],
		);

		DB::table('evolutions')->insert([
			'pokemon_id' => 2,
			'evolved_pokemon_id' => 3,
			'evolution_method_id' => 1,
			'item_id' => null,
			'level' => 32
		],
		);
	}
}
