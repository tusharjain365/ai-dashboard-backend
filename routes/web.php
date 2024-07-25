<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CallController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/call', [CallController::class, 'index']);

    Route::get('/plans', function () {
        return view('plans');
    });

    Route::post('/submit-call', [CallController::class, 'submit'])->name('submit.call');
    Route::post('/submit-follow', [CallController::class, 'submitFollow'])->name('submit.follow');
});

require __DIR__.'/auth.php';
