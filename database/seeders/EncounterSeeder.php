<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EncounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('encounters')->insert([
			'location_id' => 1,
			'pokemon_id' => 1,
			'game_id' => 1,
			'encounter_type_id' => 1
		],
		);

		DB::table('encounters')->insert([
			'location_id' => 1,
			'pokemon_id' => 1,
			'game_id' => 2,
			'encounter_type_id' => 1
		],
		);

		DB::table('encounters')->insert([
			'location_id' => 1,
			'pokemon_id' => 1,
			'game_id' => 3,
			'encounter_type_id' => 1
		],
		);

		DB::table('encounters')->insert([
			'location_id' => 2,
			'pokemon_id' => 1,
			'game_id' => 4,
			'encounter_type_id' => 2
		],
		);

		DB::table('encounters')->insert([
			'location_id' => null,
			'pokemon_id' => 2,
			'game_id' => 1,
			'encounter_type_id' => 3
		],
		);

		DB::table('encounters')->insert([
			'location_id' => null,
			'pokemon_id' => 2,
			'game_id' => 2,
			'encounter_type_id' => 3
		],
		);

		DB::table('encounters')->insert([
			'location_id' => null,
			'pokemon_id' => 2,
			'game_id' => 3,
			'encounter_type_id' => 3
		],
		);

		DB::table('encounters')->insert([
			'location_id' => null,
			'pokemon_id' => 2,
			'game_id' => 4,
			'encounter_type_id' => 3
		],
		);
    }
}
