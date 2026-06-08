<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EvenementController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
 return view('about');
});

Route::get('/evenementen', [EvenementController::class, 'index']);