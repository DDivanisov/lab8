<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JetController;
use App\Http\Controllers\ReviewController;

Route::resource('jets', JetController::class);
Route::resource('reviews', ReviewController::class)->only(['index', 'store', 'show']);
