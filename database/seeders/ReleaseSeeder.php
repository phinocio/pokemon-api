<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReleaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('releases')->insert([
			'game_id' => 1,
			'country_id' => 1,
			'platform_id' => 1,
			'release_date' => date('1996-02-27 00:00:00')
		],
		);

		DB::table('releases')->insert([
			'game_id' => 1,
			'country_id' => 1,
			'platform_id' => 6,
			'release_date' => date('2016-02-27 00:00:00')
		],
		);

		DB::table('releases')->insert([
			'game_id' => 1,
			'country_id' => 6,
			'platform_id' => 6,
			'release_date' => date('2016-02-27 00:00:00')
		],
		);

		DB::table('releases')->insert([
			'game_id' => 1,
			'country_id' => 7,
			'platform_id' => 6,
			'release_date' => date('2016-02-27 00:00:00')
		],
		);
    }
}
