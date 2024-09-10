<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome.home-page');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/history', function () {
    return view('history/sejarah-page');
});

Route::get('/member', function () {
    return view('member/anggota-page');
});