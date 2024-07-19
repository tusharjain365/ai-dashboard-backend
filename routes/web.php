<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CallController;


Route::get('/', function () {
    return view('welcome');
});

// Route::post('/loop', [CallController::class, 'loop']);


Route::any('/loop', function () {
    echo "this";
});
