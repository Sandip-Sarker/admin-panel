<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController; 


Route::post('/registration', [AuthController::class, 'registration']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function(){

     Route::post('/logout', [AuthController::class, 'logout']);

});
