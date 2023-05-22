<?php

use App\Http\Controllers\ModeratorController;
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

/*
Route::apiResource('people', ModeratorController::class);
*/

Route::get('opara/51540/people', [ModeratorController::class, 'index']);
Route::get('opara/51540/people/{id}', [ModeratorController::class, 'show']);
Route::post('opara/51540/people', [ModeratorController::class, 'store']);
Route::put('opara/51540/people/{id}/update', [ModeratorController::class, 'update']);
Route::delete('opara/51540/people/{id}', [ModeratorController::class, 'delete']);