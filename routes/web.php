<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get( '/', [ AuthController::class, 'show' ] )->name('auth');
Route::get( '/auth', [ AuthController::class, 'show' ] )->name('auth');
Route::get( '/home', [ HomeController::class, 'show' ] )->name('home');
