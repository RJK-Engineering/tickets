<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('app');
});
Route::get('/me', function (Request $request) {
    return $request;
});
