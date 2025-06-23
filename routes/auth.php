<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerifyEamilOtpController;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('send-otp', [VerifyEamilOtpController::class, 'sendOtp'])
        ->name('otp.send');

    Route::get('send-otp', [VerifyEamilOtpController::class, 'OtpPage'])
        ->name('otp.page');

    Route::post('otp-verify', [VerifyEamilOtpController::class, 'verifyOtp'])
        ->name('otp.verify');

    // Show reset password form
    Route::get('otp-verify', [VerifyEamilOtpController::class, 'showForm'])->name('password.reset');

    // Handle password form submit
    Route::post('reset-password', [VerifyEamilOtpController::class, 'store'])->name('password.store');

});

Route::middleware('auth')->group(function () {


    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
