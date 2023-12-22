<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\InteractionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Routing\Middleware\AuthRateLimit;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::middleware(ThrottleRequests::class . ':5,1')->group(function () {
    Route::post('/auth/register', [AuthController::class, 'register']);
    Route::post('/auth/login', [AuthController::class, 'login']);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Routes for managing interactions
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('interactions', InteractionController::class);
});
