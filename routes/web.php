<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::get( '/', [ AuthController::class, 'show' ] )->name( 'auth' );
Route::post( '/test', [ AuthController::class, 'test' ] )->name( 'auth' );
Route::post( '/login', [ AuthController::class, 'authenticate' ] )->withoutMiddleware( [ VerifyCsrfToken::class ] )->name( 'login' );
Route::get( '/home', [ HomeController::class, 'show' ] )->name( 'home' );
