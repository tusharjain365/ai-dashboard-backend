<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CallController;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/call', function () {
    return view('call');
});

Route::get('/plans', function () {
    return view('plans');
});

Route::post('/submit-call', [App\Http\Controllers\CallController::class, 'submit'])->name('submit.call');


// Route::post('/loop', [CallController::class, 'loop']);


// Route::any('/loop', function () {
//     echo "this";
// });

// Route::get("/loop",[CallController::class, 'processCsv']);
