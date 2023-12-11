<?php

use App\Http\Controllers\Front\EstateController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\MessageController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;


Route::controller(EstateController::class)->group(function () {
    Route::get('/estates', 'index')->name('estates');
    Route::get('/estate/{slug}', 'show')->name('estate')->where('slug', '[0-9A-Za-z-]+');
    Route::get('/estate/{slug}/favorite', 'favorite')->name('estate.favorite')->where('slug', '[0-9A-Za-z-]+');
});
