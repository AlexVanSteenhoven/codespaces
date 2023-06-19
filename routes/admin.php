<?php
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use \App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Routes that can be accessed by authenticated users with the administrator role
Route::middleware(['auth'])->group(function() {
    Route::prefix('admin')->name('admin.')->group(function() {
        Route::get('/', function () {
            return view('pages.admin.dashboard');
        })->name('dashboard');

        Route::resource('users', UserController::class)->name('index', 'users');
//        Route::resource('roles', RoleController::class);
//        Route::resource('permissions', PermissionController::class);
//        Route::resource('comments', CommentController::class);
    });
});
