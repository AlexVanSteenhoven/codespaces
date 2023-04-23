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

// Return the homepage
Route::view('/','pages.home')->name('home');

Route::name('auth.')->prefix('auth')->group(function () {
    Route::get('/login', [AuthenticationController::class, 'index'])->name('login');
    Route::get('/register', [AuthenticationController::class, 'create'])->name('register');
    Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
    Route::post('/login/email', [AuthenticationController::class, 'login'])->name('login.email');
    Route::get('/login/{provider}/redirect', [AuthenticationController::class, 'redirect'])->name('redirect');
    Route::get('/login/{provider}/callback', [AuthenticationController::class, 'callback'])->name('callback');
});

Route::middleware(['auth'])->group(function () {
    Route::namespace('App')->prefix('app')->name('app.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('clients', ClientController::class)->name('index', 'clients');
        Route::resource('projects', ProjectController::class)->name('index', 'projects');
        Route::resource('tasks', TaskController::class)->name('index', 'tasks');
    });
});

require __DIR__.'/admin.php';
