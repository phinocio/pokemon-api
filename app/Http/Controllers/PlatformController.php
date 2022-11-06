<?php

namespace App\Http\Controllers;

use App\Http\Resources\PlatformResource;
use App\Models\Platform;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PlatformController extends Controller
{

    public function index()
    {
		return PlatformResource::collection(Platform::all());
    }

	public function show(Platform $platform)
	{
		return new PlatformResource($platform);
	}

}
