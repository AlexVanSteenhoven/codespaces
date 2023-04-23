<?php
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Routes that can be accessed by authenticated users with the administrator role
Route::middleware(['auth', 'role:administrator'])->group(function() {
    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
        Route::get('/', function () {
            return view('pages.admin.dashboard');
        })->name('dashboard');

        Route::resource('users', UserController::class)->name('index', 'users');
        Route::resource('roles', RoleController::class)->name('index', 'roles');
        Route::resource('permissions', PermissionController::class)->name('index', 'permissions');
        Route::resource('comments', CommentController::class)->name('index', 'comments');
    });
});
