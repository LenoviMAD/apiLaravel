<?php

use App\Http\Controllers\API\DietaController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('dietas', [DietaController::class, 'index']);
Route::post('dietas', [DietaController::class, 'store']);
Route::get('dietas/{dieta}', [DietaController::class, 'show']);
Route::put('dietas/{dieta}', [DietaController::class, 'update']);
Route::delete('dietas/{dieta}', [DietaController::class, 'destroy']);
