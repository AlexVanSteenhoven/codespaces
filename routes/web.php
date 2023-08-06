<?php

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    if (Auth::user()) {
        return redirect('dashboard');
    } else {
        return redirect('login');
    }
});

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

    // Admin routes
    Route::middleware([ 'role:owner' ])->prefix('admin')->group(function () {
        Route::resource('/users', UserController::class, [ 'as' => 'admin' ]);
        Route::resource('/projects', ProjectController::class, [ 'as' => 'admin' ]);
    });
});
