<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('games')->insert([
			'name' => 'Green',
			'generation_id' => 1
		],
		);

		DB::table('games')->insert([
			'name' => 'Red',
			'generation_id' => 1
		],
		);

		DB::table('games')->insert([
			'name' => 'Blue',
			'generation_id' => 1
		],
		);

		DB::table('games')->insert([
			'name' => 'Yellow',
			'generation_id' => 1
		],
		);
    }
}
