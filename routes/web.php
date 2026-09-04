<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\ForcePasswordController;
use App\Http\Controllers\EmployeeAccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// --- Public Routes ---
Route::get('/products', function () {
    return view('products.index');
})->name('products.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // --- Force Password Change Routes ---
    Route::get('/force-password-change', [ForcePasswordController::class, 'show'])
        ->name('password.force.form');
    Route::post('/force-password-change', [ForcePasswordController::class, 'update'])
        ->name('password.force.update');
});

// --- Employee Management (Owner Only) ---
Route::middleware(['auth', 'role:Owner'])->group(function () {
    Route::resource('employees', EmployeeAccountController::class)
        ->only(['index', 'create', 'store']);
});

require __DIR__.'/auth.php';
