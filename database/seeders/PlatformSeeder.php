<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('platforms')->insert([
			'name' => 'Game Boy'
		],
		);

		DB::table('platforms')->insert([
			'name' => 'Super Game Boy'
		],
		);

		DB::table('platforms')->insert([
			'name' => 'Super Game Boy 2'
		],
		);

		DB::table('platforms')->insert([
			'name' => 'Game Boy Color'
		],
		);

		DB::table('platforms')->insert([
			'name' => 'Game Boy Advance'
		],
		);

		DB::table('platforms')->insert([
			'name' => 'DS'
		],
		);

		DB::table('platforms')->insert([
			'name' => '3DS'
		],
		);

		DB::table('platforms')->insert([
			'name' => '3DS Virtual Console'
		],
		);

		DB::table('platforms')->insert([
			'name' => 'Switch'
		],
		);
    }
}
