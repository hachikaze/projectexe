<?php

use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\BoatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FerryAideController;
use App\Http\Controllers\FerryAideLocationController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Models\Boat;
use App\Models\FerryAideLocation;
use App\Models\PassengerManifest;
use App\Models\Ridership;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

// MAIN FUNCTION
Route::middleware('auth', 'verified')->group(function() {

    // FOR DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // FOR BOATS
    Route::get('/boats', [BoatController::class, 'index'])->name('boats');
    Route::patch('/boats/update-status', [BoatController::class, 'updateStatus'])->name('update-status');
    Route::post('/boats/add-boat', [BoatController::class, 'addBoat'])->name('add-boat');
    Route::delete('/boats/{boat}', [BoatController::class, 'deleteBoat'])->name('delete-boat');

    // FOR MAP
    Route::get('/map', [MapController::class, 'index']);

    // FOR SETTINGS
    Route::get('/settings', function() {
        return view('settings');
    });

    // FOR REPORTS
    Route::get('/reports', [ReportsController::class, 'index'])->name('reports');
    Route::get('/reports/data/{year}', [ReportsController::class, 'getDataForYear']);
    Route::get('/fetch-passenger-details', [ReportsController::class, 'fetchPassengerDetails'])->name('fetchPassengerDetails');
    Route::get('/reports/search', [ReportsController::class, 'liveSearch'])->name('reports.search');


    Route::get('/export-csv', [ReportsController::class, 'exportDailyCsv'])->name('export.csv');
    Route::get('/reports/export-csv', [ReportsController::class, 'exportCsv']);
    Route::get('/reports/export-weekly-csv', [ReportsController::class, 'exportWeeklyCsv']);

    // FOR USER MANAGEMENT
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::patch('/users/update-user-type', [UserController::class, 'update'])->name('update-user-type');
    Route::patch('/user/update-station', [UserController::class, 'updateAssignedStation'])->name('update-assigned-station');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('delete-user');

    // FOR REGISTER
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);

    // FOR USERS OF THE SYSTEM
    Route::get('/profile', [SessionController::class, 'showProfile'])->name('profile');
    Route::patch('/profile/update', [SessionController::class, 'updateProfile']);
    Route::patch('/profile/contact', [SessionController::class, 'updateContact']);
    Route::patch('/profile/password', [PasswordController::class, 'update'])->name('updatePass');
});

Route::get('/', [SessionController::class, 'create'])->name('login');
Route::post('/', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

// FORGOT PASSWORD | RESET PASSWORD | RESEND RESET PASSWORD
Route::get('/forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->name('forgot-password');
Route::post('/forgot-password-post', [ForgotPasswordController::class, 'forgotPasswordPost'])->name('forgot-password-post');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'resetPassword'])->name('reset-password');
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPasswordPost'])->name('reset-password-post');
Route::post('/resend-password-reset-link', [ForgotPasswordController::class, 'resendPasswordResetLink'])->name('resend-password-reset-link');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/')->with('success', 'Your email has been successfully verified.');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('success', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/api/ferry-aide/locations', [FerryAideLocationController::class, 'getFerryAideLocations'])->name('ferry-aide.locations');