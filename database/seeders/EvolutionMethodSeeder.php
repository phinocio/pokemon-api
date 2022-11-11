<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvolutionMethodSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('evolution_methods')->insert([
			'name' => 'Level Up'
		],
		);

		DB::table('evolution_methods')->insert([
			'name' => 'Trade'
		],
		);
	}
}
