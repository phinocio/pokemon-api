<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('game_location')->insert([
			'game_id' => 1,
			'location_id' => 1
		],
		);

		DB::table('game_location')->insert([
			'game_id' => 1,
			'location_id' => 2
		],
		);

		DB::table('game_location')->insert([
			'game_id' => 1,
			'location_id' => 3
		],
		);
    }
}
