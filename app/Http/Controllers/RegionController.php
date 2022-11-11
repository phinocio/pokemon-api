<?php

namespace App\Http\Controllers;

use App\Http\Resources\PokemonResource;
use App\Http\Resources\RegionResource;
use App\Models\Pokemon;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{

    public function index()
    {
		return RegionResource::collection(Region::with('locations')->get());
    }


}
