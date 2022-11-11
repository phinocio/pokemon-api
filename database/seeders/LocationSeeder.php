<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('locations')->insert([
			'name' => 'Pallet Town',
			'region_id' => 1
		],
		);

		DB::table('locations')->insert([
			'name' => 'Celadon City',
			'region_id' => 1
		],
		);

		DB::table('locations')->insert([
			'name' => 'Route 1',
			'region_id' => 1
		],
		);

		DB::table('locations')->insert([
			'name' => 'Route 2',
			'region_id' => 1
		],
		);

		DB::table('locations')->insert([
			'name' => 'Route 3',
			'region_id' => 1
		],
		);
    }
}
