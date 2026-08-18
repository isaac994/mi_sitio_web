<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mi_proyecto', function () {
    return view('mi_proyecto');
});
Route::get('/login', function () {
    return view('login');
});

