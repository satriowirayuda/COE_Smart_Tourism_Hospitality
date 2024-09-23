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

// Login
Route::get('/login', function () {
    return view('admin.login');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

// Proyek terkini
Route::get('/project', function () {
    return view('admin.project.project-terkini');
});

// Aktivitas
Route::get('/aktivitas', function () {
    return view('admin.aktivitas.aktivitas');
});

// a.  Berita
Route::get('/news', function () {
    return view('admin.aktivitas.berita.berita');
});

Route::get('/upload-news', function () {
    return view('admin.aktivitas.berita.upload-news');
});

// b. Riset dan Publikasi
Route::get('/riset-publikasi', function () {
    return view('admin.aktivitas.riset-publikasi.dashboard');
});

Route::get('/innovillage', function () {
    return view('admin.aktivitas.riset-publikasi.innovillage');
});
Route::get('/jurnal', function () {
    return view('admin.aktivitas.riset-publikasi.jurnal');
});
Route::get('/upload-jurnal', function () {
    return view('admin.aktivitas.riset-publikasi.upload-jurnal');
});
Route::get('/upload-innovillage', function () {
    return view('admin.aktivitas.riset-publikasi.upload-innovillage');
});


// c. Inovasi
Route::get('/inovasi', function () {
    return view('admin.aktivitas.inovasi.dashboard');
});
Route::get('/upload-inovasi', function () {
    return view('admin.aktivitas.inovasi.upload-inovasi');
});

// d. Bisnis
Route::get('/bisnis', function () {
    return view('admin.aktivitas.bisnis.dashboard');
});
Route::get('/pelatihan', function () {
    return view('admin.aktivitas.bisnis.pelatihan');
});
Route::get('/kedai', function () {
    return view('admin.aktivitas.bisnis.kedai');
});
Route::get('/upload-pelatihan', function () {
    return view('admin.aktivitas.bisnis.upload-pelatihan');
});
Route::get('/upload-kedai', function () {
    return view('admin.aktivitas.bisnis.upload-kedai');
});