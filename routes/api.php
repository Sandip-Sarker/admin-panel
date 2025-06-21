<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController; 
use App\Http\Controllers\API\UserprofileController;


Route::post('/registration', [AuthController::class, 'registration']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function(){

     Route::post('/logout', [AuthController::class, 'logout']);


     // User Profile
    Route::get('/get-profile', [UserprofileController::class, 'getProfile']);
    // Route::put('/update-profile', [UserprofileController::class, 'updateProfile']);   

});
