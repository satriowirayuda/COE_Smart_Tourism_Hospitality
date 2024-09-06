<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome.home-page');
});

Route::get('/beranda', function () {
    return view('beranda');
});
