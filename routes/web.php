<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/','pages.home')->name('home');

// Authentication Routes
Route::get('/sign-in', [AuthenticationController::class, 'index'])->name('auth.login');
Route::get('/sign-up', [AuthenticationController::class, 'create'])->name('auth.register');
Route::get('/sign-in/{provider}/redirect', [AuthenticationController::class, 'redirect'])->name('auth.redirect');
Route::get('/sign-in/{provider}/callback', [AuthenticationController::class, 'callback'])->name('auth.callback');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [ DashboardController::class, 'index']);
});

