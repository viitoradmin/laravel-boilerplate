<?php

/**
 * Seller API Routes
 */

use App\Modules\Backend\V1\Auth\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('api/v1/seller')->middleware('api')->group(function() {
    Route::post('login', [AuthController::class, 'login']);
    Route::middleware('auth:api')->group(function () {
        Route::get('getuserdetails', [AuthController::class, 'getUserDetails']);
    });
});
