<?php

namespace App\Http\Controllers;

use App\Http\Resources\PokemonResource;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        return PokemonResource::collection(Pokemon::with(['evolutions','games.encounters'])->get());
    }

	public function show(Pokemon $pokemon)
	{

		$pokemon->load(['evolutions', 'games.encounters' => function($query) use ($pokemon) {
			$query->where('pokemon_id', $pokemon->id);
		}]);

		return new PokemonResource($pokemon);
	}
}
