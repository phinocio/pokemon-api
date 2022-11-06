<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('pokemon')->insert([
			'natdex_num' => 1,
			'name' => 'Bulbasaur',
			'generation_added' => 1
		],
		);

		DB::table('pokemon')->insert([
			'natdex_num' => 2,
			'name' => 'Ivysaur',
			'generation_added' => 1
		],
		);

		DB::table('pokemon')->insert([
			'natdex_num' => 3,
			'name' => 'Venusaur',
			'generation_added' => 1
		],
		);

		DB::table('pokemon')->insert([
			'natdex_num' => 4,
			'name' => 'Charmander',
			'generation_added' => 1
		],
		);

		DB::table('pokemon')->insert([
			'natdex_num' => 5,
			'name' => 'Charmeleon',
			'generation_added' => 1
		],
		);

		DB::table('pokemon')->insert([
			'natdex_num' => 6,
			'name' => 'Charizard',
			'generation_added' => 1
		],
		);
    }
}
