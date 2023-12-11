<?php

use App\Http\Controllers\Front\EstateController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\MessageController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::controller(MessageController::class)->group(function () {
    Route::get('/message', 'index')->name('message')->middleware(ProtectAgainstSpam::class);
    Route::post('/message/store', 'store')->name('message.store')->middleware(ProtectAgainstSpam::class);
    });