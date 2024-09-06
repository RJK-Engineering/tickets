<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('app');
});
Route::get('/me', function (Request $request) {
    return $request;
});