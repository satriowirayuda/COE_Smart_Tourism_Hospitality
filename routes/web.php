<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome.home-page');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/sejarah', function () {
    return view('history.sejarah-page');
});

Route::get('/anggota', function () {
    return view('member.anggota-page');
});

Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


Route::get('/project', function () {
    return view('admin.project.project-terkini');
});

Route::get('/aktivitas', function () {
    return view('admin.aktivitas.aktivitas');
});


Route::get('/news', function () {
    return view('admin.aktivitas.berita.berita');
});

Route::get('/upload-news', function () {
    return view('admin.aktivitas.berita.upload-news');
});