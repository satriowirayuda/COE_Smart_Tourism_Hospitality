<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProjectController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('projects')->group(function () {
    Route::get('/', [ProjectController::class, 'index']);
    Route::post('/', [ProjectController::class, 'store']);
    Route::put('/{project}', [ProjectController::class, 'update']);
});

Route::prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index']);
    Route::get('/primary', [NewsController::class, 'showPrimary']);
    Route::get('/{news}', [NewsController::class, 'show']);
    Route::post('/', [NewsController::class, 'store'])->name('upload_news');
    Route::put('/{news}', [NewsController::class, 'update'])->name('update_news');
    Route::delete('/{news}', [NewsController::class, 'delete'])->name('delete_news');
});

Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'index']);
    Route::post('/', [EventController::class, 'store']);
    Route::put('/{event}', [EventController::class, 'update']);
    Route::delete('/{event}', [EventController::class, 'delete']);
});

Route::prefix('members')->group(function () {
    Route::get('/', [MemberController::class, 'index']);
    Route::post('/', [MemberController::class, 'store']);
    Route::put('/{member}', [MemberController::class, 'update']);
    Route::delete('/{member}', [MemberController::class, 'delete']);
});

Route::post('/register', [AuthController::class, 'insert'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login_api');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
