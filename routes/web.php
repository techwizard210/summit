<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::get( '/', [ AuthController::class, 'show' ] )->name( 'auth' );
Route::post( '/login', [ AuthController::class, 'authenticate' ] )->withoutMiddleware( [ VerifyCsrfToken::class ] )->name( 'login' );

Route::middleware(['auth'])->group( function() {
    Route::get( '/home', [ HomeController::class, 'show' ] )->name( 'home' );
});
Route::post('/uploadPhoto', [ HomeController::class, 'uploadPhoto' ])->withoutMiddleware( [ VerifyCsrfToken::class ] )->name('uploadPhoto');
Route::get( '/getPhotosByUser', [ HomeController::class, 'getPhotosByUser' ] )->name( 'getPhotosByUser' );

