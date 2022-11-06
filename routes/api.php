<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\GenerationController;
use App\Http\Controllers\PlatformController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/generations', [GenerationController::class, 'index']);
Route::get('/generations/{id}', [GenerationController::class, 'show']);

Route::get('/games', [GameController::class, 'index']);

Route::get('/platforms', [PlatformController::class, 'index']);
