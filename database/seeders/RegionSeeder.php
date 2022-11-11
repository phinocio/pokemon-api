<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('regions')->insert([
			'name' => 'Kanto'
		],
		);

		DB::table('regions')->insert([
			'name' => 'Johto'
		],
		);

		DB::table('regions')->insert([
			'name' => 'Hoenn'
		],
		);

		DB::table('regions')->insert([
			'name' => 'Sinnoh'
		],
		);

		DB::table('regions')->insert([
			'name' => 'Unova'
		],
		);

		DB::table('regions')->insert([
			'name' => 'Kalos'
		],
		);

		DB::table('regions')->insert([
			'name' => 'Alola'
		],
		);

		DB::table('regions')->insert([
			'name' => 'Galar'
		],
		);

		DB::table('regions')->insert([
			'name' => 'Hisui'
		],
		);

		DB::table('regions')->insert([
			'name' => 'Paldea'
		],
		);
    }
}
