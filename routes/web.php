<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::get( '/', [ AuthController::class, 'show' ] )->name( 'login' );
Route::post( '/authenticate', [ AuthController::class, 'authenticate' ] )->withoutMiddleware( [ VerifyCsrfToken::class ] )->name( 'authenticate' );
Route::post( '/register', [ AuthController::class, 'register' ] )->withoutMiddleware( [ VerifyCsrfToken::class ] )->name( 'register' );

Route::middleware(['auth'])->group( function() {
    Route::get( '/home', [ HomeController::class, 'show' ] )->name( 'home' );
});

Route::post('/uploadPhoto', [ HomeController::class, 'uploadPhoto' ])->withoutMiddleware( [ VerifyCsrfToken::class ] )->name('uploadPhoto');
Route::get( '/getPhotosByUser', [ HomeController::class, 'getPhotosByUser' ] )->name( 'getPhotosByUser' );
Route::get('/downloadFolder', [HomeController::class, 'downloadFolder'])->name('downloadFolder');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');