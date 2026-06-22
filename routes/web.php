<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EvenementController;

Route::get('/', function () {return view('welcome');});

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {return view('about');});

Route::get('/evenementen', [EvenementController::class, 'index']);

Route::post('/evenementen', [EvenementController::class, 'store'])->name('evenementen.store');

Route::get('/evenementen/create', [EvenementController::class, 'create'])->name('evenementen.create');