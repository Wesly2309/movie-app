<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;

Route::get('/', [HomeController::class , 'index']);
Route::get('/movie', [MovieController::class , 'index']);