<?php

use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/user', fn(Request $request) => $request->user());
});

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/user', [LoginController::class, 'user']);
