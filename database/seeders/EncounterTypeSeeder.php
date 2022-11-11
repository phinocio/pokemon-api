<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EncounterTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('encounter_types')->insert([
			'name' => 'Starter'
		],
		);

		DB::table('encounter_types')->insert([
			'name' => 'Gift'
		],
		);

		DB::table('encounter_types')->insert([
			'name' => 'Evolve'
		],
		);

		DB::table('encounter_types')->insert([
			'name' => 'Wild Encounter (Grass)'
		],
		);
    }
}
