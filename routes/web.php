<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

// Public Landing Page (Fig. 3) & Catalog placeholder
Route::get('/', fn () => view('welcome'))->name('landing');
Route::get('/catalog', fn () => view('catalog.index'))->name('catalog.index');

// Authentication (Fig. 4)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Forced Password Change (Fig. 5)
    Route::get('/password/change', [AuthController::class, 'showForcePasswordChange'])->name('password.change');
    Route::post('/password/change', [AuthController::class, 'updateForcePasswordChange'])->name('password.change.update');

    // Protected Routes (dapat tapos na sa forced password change)
    Route::middleware('force.password.change')->group(function () {

        // Owner Routes
        Route::middleware('role:owner')->prefix('owner')->name('owner.')->group(function () {
            Route::get('/dashboard', fn () => view('owner.dashboard'))->name('dashboard');

            // Employees (Fig. 9 & Fig. 10)
            Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
            Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
            Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
            Route::get('/employees/credentials', [EmployeeController::class, 'credentials'])->name('employees.credentials');
            Route::patch('/employees/{user}/toggle-status', [EmployeeController::class, 'toggleStatus'])->name('employees.toggle');

            // Branch Management (Fig. 11)
            Route::get('/branches', [BranchController::class, 'index'])->name('branches.index');
            Route::post('/branches', [BranchController::class, 'store'])->name('branches.store');
            Route::put('/branches/{branch}', [BranchController::class, 'update'])->name('branches.update');

            // Employee Activity Log (Fig. 8)
            Route::get('/activity-logs', [EmployeeController::class, 'activityLogs'])->name('activity-logs.index');
        });

        // Cashier Routes (Placeholder para sa Module Build 4 POS)
        Route::middleware('role:cashier')->prefix('cashier')->name('cashier.')->group(function () {
            Route::get('/pos', fn () => view('cashier.pos'))->name('pos');
        });

        // Checker Routes (Placeholder para sa Module Build 2 Inventory)
        Route::middleware('role:checker')->prefix('checker')->name('checker.')->group(function () {
            Route::get('/inventory', fn () => view('checker.inventory'))->name('inventory');
        });
    });
});
