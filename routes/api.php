<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\StageController;
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

Route::prefix('/boards')->group(function(){
    Route::get('', [BoardController::class, 'index']);
    Route::post('/create', [BoardController::class, 'create']);
    Route::post('/update', [BoardController::class, 'update']);
});

Route::prefix('/stages')->group(function () {
    Route::get('', [StageController::class, 'index']);
    Route::post('/create', [StageController::class, 'create']);
    Route::post('/update', [StageController::class, 'update']);
});

Route::prefix('/cards')->group(function () {
    Route::get('', [CardController::class, 'index']);
    Route::post('/create', [CardController::class, 'create']);
    Route::post('/update', [CardController::class, 'update']);
});