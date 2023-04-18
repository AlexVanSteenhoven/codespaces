<?php

// Import route facade
use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ClientController;

// Routes that can be accessed by authenticated users with the administrator role
Route::middleware(['auth', 'role:administrator'])->group(function() {
    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::resource('users', UserController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('projects', ProjectController::class);
        Route::resource('tasks', TaskController::class);
        Route::resource('comments', CommentController::class);
        Route::resource('clients', ClientController::class);
    });
});
