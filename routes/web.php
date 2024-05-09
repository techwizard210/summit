<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

// user routes
Route::get( '/', [ AuthController::class, 'show' ] )->name( 'login' );
Route::post( '/authenticate', [ AuthController::class, 'authenticate' ] )->withoutMiddleware( [ VerifyCsrfToken::class ] )->name( 'authenticate' );
Route::post( '/register', [ AuthController::class, 'register' ] )->withoutMiddleware( [ VerifyCsrfToken::class ] )->name( 'register' );

Route::middleware(['auth'])->group( function() {
    Route::get( '/home', [ HomeController::class, 'show' ] )->name( 'home' );
    Route::get('/downloadFolder', [HomeController::class, 'downloadFolder'])->name('downloadFolder');
    Route::post('/uploadPhoto', [ HomeController::class, 'uploadPhoto' ])->name('uploadPhoto');
    Route::get( '/getPhotosByUser', [ HomeController::class, 'getPhotosByUser' ] )->name( 'getPhotosByUser' );
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

//admin routes
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/auth', [AdminController::class, 'show'])->name('auth');
    Route::post( '/authenticate', [ AdminController::class, 'authenticate' ] )->withoutMiddleware( [ VerifyCsrfToken::class ] )->name( 'authenticate' );
    Route::middleware(['auth'])->group(function() {
        Route::get('/home', [AdminController::class, 'home'])->name('home');
    });
});