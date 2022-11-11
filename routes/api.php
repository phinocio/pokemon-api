<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\GenerationController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\RegionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/generations', [GenerationController::class, 'index']);
Route::get('/generations/{generation}', [GenerationController::class, 'show']);

Route::get('/games', [GameController::class, 'index']);
Route::get('/games/{game}', [GameController::class, 'show']);

Route::get('/platforms', [PlatformController::class, 'index']);
Route::get('/platforms/{platform}', [PlatformController::class, 'show']);

Route::get('/pokemon', [PokemonController::class, 'index']);
Route::get('/pokemon/{pokemon}', [PokemonController::class, 'show']);

Route::get('/regions', [RegionController::class, 'index']);
