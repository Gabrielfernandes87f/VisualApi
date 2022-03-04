<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/gabriel', function () {
    return view('gabriel');
});

Route::get('/kaio', function () {
    return view('kaio');
});

