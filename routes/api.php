<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/auth')->group(function () {
    Route::get('/github', [AuthenticationController::class, 'githubLogin'])->name('auth.github.login');
    Route::get('/github/redirect', [AuthenticationController::class, 'githubRedirect'])->name('auth.github.redirect');

    Route::get('/gitlab', [AuthenticationController::class, 'gitlabLogin'])->name('auth.gitlab.login');
    Route::get('/gitlab/redirect', [AuthenticationController::class, 'gitlabRedirect'])->name('auth.gitlab.redirect');

    Route::get('/bitbucket', [AuthenticationController::class, 'bitbucketLogin'])->name('auth.bitbucket.login');
    Route::get('/bitbucket/redirect', [AuthenticationController::class, 'bitbucketRedirect'])->name('auth.bitbucket.redirect');
});
