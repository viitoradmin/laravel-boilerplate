<?php

/**
 * Auth WEB Routes
 */
use App\Modules\Backend\V1\Auth\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

/**
* without auth routes.
*/
Route::middleware('guest', 'web')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

/**
 * with auth routes.
 */
Route::middleware('auth:web', 'web')->group(function () {
    Route::get('/dashboard', [AuthenticatedSessionController::class, 'home']);
});
