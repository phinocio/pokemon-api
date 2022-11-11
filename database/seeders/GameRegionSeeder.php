<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('game_region')->insert([
			'game_id' => 1,
			'region_id' => 1
		],
		);

		DB::table('game_region')->insert([
			'game_id' => 2,
			'region_id' => 1
		],
		);

		DB::table('game_region')->insert([
			'game_id' => 3,
			'region_id' => 1
		],
		);

		DB::table('game_region')->insert([
			'game_id' => 4,
			'region_id' => 1
		],
		);
    }
}
