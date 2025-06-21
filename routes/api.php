<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController; 

Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:api')->group(function(){

    // Route::post('/login-api', [AuthController::class, 'login']);

});
