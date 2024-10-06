<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController as AuthController;
use App\Http\Controllers\UserController as UserController;

Route::get('/', function () {
    return view('welcome');
});
