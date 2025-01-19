<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EstateController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\UserAgentController;
use App\Http\Controllers\Admin\VisitorController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::middleware('guest')
    ->group(function () {
        Route::get('/login', [LoginController::class, 'create'])
            ->name('login');

        Route::post('/login', [LoginController::class, 'store'])
            ->middleware(ProtectAgainstSpam::class);
    });

Route::middleware('auth')
    ->group(function () {
        Route::post('/logout', [LoginController::class, 'destroy'])
            ->middleware(ProtectAgainstSpam::class)
            ->name('logout');
    });

Route::middleware('auth')->prefix('admin')->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::controller(EstateController::class)->prefix('estates')->name('estates.')
            ->group(function () {
                Route::get('/index', 'index')->name('index');
                
            });

        Route::controller(CategoryController::class)->prefix('categories')->name('categories.')
            ->group(function () {
                Route::get('/index', 'index')->name('index');

            });

        Route::controller(LocationController::class)->prefix('locations')->name('locations.')
            ->group(function () {
                Route::get('/index', 'index')->name('index');

            });

        Route::controller(UserAgentController::class)->prefix('user-agents')->name('userAgents.')
            ->group(function () {
                Route::get('/index', 'index')->name('index');
            });



        Route::controller(VisitorController::class)->prefix('visitors')->name('visitors.')
            ->group(function () {
                Route::get('/index', 'index')->name('index');
            });
    });
