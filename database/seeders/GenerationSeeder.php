<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('generations')->insert([
            'name' => 'Generation I',
            'new_pokemon' => 151,
            'total_pokemon' => 151,
            'new_moves' => 165,
            'total_moves' => 165,
            'new_abilities' => 0,
            'total_abilities' => 0
        ],
        );

        DB::table('generations')->insert([
            'name' => 'Generation II',
            'new_pokemon' => 100,
            'total_pokemon' => 251,
            'new_moves' => 85,
            'total_moves' => 250,
            'new_abilities' => 0,
            'total_abilities' => 0
        ],
        );
    }
}
