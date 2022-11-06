<?php

namespace App\Http\Controllers;

use App\Http\Resources\GenerationResource;
use App\Models\Generation;
use Illuminate\Http\Request;

class GenerationController extends Controller
{
    public function index()
	{
        return GenerationResource::collection(Generation::with(['games.releases', 'games.platforms'])->get());

//		return response()->json(Generation::with(['games.releases'])->get());
    }

	public function show(Generation $generation)
	{
		return new GenerationResource($generation);
	}
}
