<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController as AuthController;
use App\Http\Controllers\UserController as UserController;

Route::post('/user/register', [UserController::class, 'register']);
Route::post('/user', [UserController::class, 'register'])->middleware('auth:sanctum');

Route::post('/tokens/create', [AuthController::class, 'login']);

Route::post('/tokens/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::apiResource("/cars", CarController::class)->middleware('auth:sanctum');
