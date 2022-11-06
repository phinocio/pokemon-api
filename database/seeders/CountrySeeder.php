<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('countries')->insert([
			'name' => 'Japan',
			'country_code' => 'JP'
		],
		);

		DB::table('countries')->insert([
			'name' => 'North America',
			'country_code' => 'NA'
		],
		);

		DB::table('countries')->insert([
			'name' => 'Australia',
			'country_code' => 'AU'
		],
		);

		DB::table('countries')->insert([
			'name' => 'Europe',
			'country_code' => 'EU'
		],
		);

		DB::table('countries')->insert([
			'name' => 'South Korea',
			'country_code' => 'KR'
		],
		);

		DB::table('countries')->insert([
			'name' => 'Hong Kong',
			'country_code' => 'HK'
		],
		);

		DB::table('countries')->insert([
			'name' => 'Taiwan',
			'country_code' => 'TW'
		],
		);
    }
}
