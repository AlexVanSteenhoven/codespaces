<?php

use App\Http\Controllers\App\ClientController;
use App\Http\Controllers\App\ProjectController;
use App\Http\Controllers\App\TaskController;
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
Route::get('/sign-out', [AuthenticationController::class, 'logout'])->name('auth.logout');
Route::post('/sign-in/email', [AuthenticationController::class, 'login'])->name('auth.sign-in'); // TODO :: Fix breaking bug (redirect to 419 page expired)
Route::get('/sign-in/{provider}/redirect', [AuthenticationController::class, 'redirect'])->name('auth.redirect');
Route::get('/sign-in/{provider}/callback', [AuthenticationController::class, 'callback'])->name('auth.callback');

Route::namespace('App')->prefix('app')->name('app.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('clients', ClientController::class)->name('index', 'clients');
    Route::resource('projects', ProjectController::class)->name('index', 'projects');
    Route::resource('tasks', TaskController::class)->name('index', 'tasks');

});

require __DIR__.'/admin.php';
