<?php

namespace App\Http\Controllers;

use App\Http\Resources\GameResource;
use App\Http\Resources\GenerationResource;
use App\Models\Country;
use App\Models\Game;
use App\Models\Generation;
use App\Models\Platform;
use Illuminate\Http\Request;

class GameController extends Controller
{
	public function index()
	{
		return GameResource::collection(Game::with(['releases', 'platforms'])->get());
	}

	public function show(Game $game)
	{
		return new GameResource($game);

	}
}
