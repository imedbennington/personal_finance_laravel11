<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('Users Frontend Theme.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Custom Registration Route
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::get('login_user', [AuthController::class, 'showLoginForm'])->name('login_user');

// This line should be removed if you are not using Laravel's default auth routes
// require __DIR__.'/auth.php';
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/registeration_account', [AuthController::class, 'register_account'])->name('registeration_account');

Route::get('/user-profile', function () {
    return view('Users Frontend Theme.user-profile');
})->name('user-profile');
Route::get('/user-profile', [AuthController::class, 'get_info'])->name('user-profile');
