<?php

use App\Http\Controllers\Front\EstateController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\MessageController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/pro', [HomeController::class, 'pro'])->name('pro');
Route::get('/language/{key}', [HomeController::class, 'language'])->name('language');
