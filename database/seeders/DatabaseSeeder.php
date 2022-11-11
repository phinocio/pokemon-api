<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Resources\PlatformResource;
use App\Models\EvolutionMethod;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            GenerationSeeder::class,
			GameSeeder::class,
			CountrySeeder::class,
			PlatformSeeder::class,
			ReleaseSeeder::class,
			GamePlatformSeeder::class,
			PokemonTableSeeder::class,
			GamePokemonSeeder::class,
			RegionSeeder::class,
			GameRegionSeeder::class,
			LocationSeeder::class,
			GameLocationSeeder::class,
			EncounterTypeSeeder::class,
			EncounterSeeder::class,
			EvolutionMethodSeeder::class,
			EvolutionSeeder::class
        ]);
    }
}
