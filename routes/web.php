<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

use App\Http\Middleware\CheckIsAdmin;

// user routes
Route::get( '/', [ AuthController::class, 'show' ] )->name( 'login' );
Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
Route::post( '/authenticate', [ AuthController::class, 'authenticate' ] )->withoutMiddleware( [ VerifyCsrfToken::class ] )->name( 'authenticate' );
Route::get('/getLocation', [AuthController::class, 'getLocation'])->name('getLocation');

Route::middleware(['auth'])->group( function() {
    Route::get( '/home', [ HomeController::class, 'show' ] )->name( 'home' );
    Route::post( '/goHome', [ HomeController::class, 'goHome' ] )->name( 'goHome' );
    Route::get('/showLocations', [HomeController::class, 'showLocations'])->name('showLocations');
    Route::get('/downloadFolder', [HomeController::class, 'downloadFolder'])->name('downloadFolder');
    Route::post('/uploadPhoto', [ HomeController::class, 'uploadPhoto' ])->name('uploadPhoto');
    Route::get( '/getPhotosByUser', [ HomeController::class, 'getPhotosByUser' ] )->name( 'getPhotosByUser' );
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

//admin routes
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/auth', [AdminController::class, 'show'])->name('auth');
    Route::post( '/authenticate', [ AdminController::class, 'authenticate' ] )->withoutMiddleware( [ VerifyCsrfToken::class ] )->name( 'authenticate' );
    Route::middleware(['auth', CheckIsAdmin::class])->group(function() {
        Route::get('/home', [AdminController::class, 'home'])->name('home');
        Route::get('/showClue', [AdminController::class, 'showClue'])->name('showClue');
        Route::get('/showGroup', [AdminController::class, 'showGroup'])->name('showGroup');
        Route::post('/addClue', [AdminController::class, 'addClue'])->name('addClue');
        Route::post('/editClue', [AdminController::class, 'editClue'])->name('editClue');
        Route::post('/deleteClue', [AdminController::class, 'deleteClue'])->name('deleteClue');
        Route::post('/addGroup', [AdminController::class, 'addGroup'])->name('addGroup');
        Route::post('/editGroup', [AdminController::class, 'editGroup'])->name('editGroup');
        Route::post('/deleteGroup', [AdminController::class, 'deleteGroup'])->name('deleteGroup');
        Route::post('/browsePhoto', [AdminController::class, 'browsePhoto'])->name('browsePhoto');
        Route::post('/downloadFolder', [AdminController::class, 'downloadFolder'])->name('downloadFolder');
        Route::post( '/register', [ AuthController::class, 'register' ] )->name( 'register' );
        Route::get('/showTeam', [AdminController::class, 'showTeam'])->name('showTeam');
        Route::post('/showLocation', [AdminController::class, 'showLocation'])->name('showLocation');
        Route::post('/saveLocation', [AdminController::class, 'saveLocation'])->name('saveLocation');
    });
});