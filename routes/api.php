<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProjectController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/projects', [ProjectController::class, 'index']);
Route::post('/projects', [ProjectController::class, 'store']);
Route::put('/projects/{project}', [ProjectController::class, 'update']);

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/primary', [NewsController::class, 'showPrimary']);
Route::get('/news/{news}', [NewsController::class, 'show']);
Route::post('/news', [NewsController::class, 'store'])->name('upload_news');
Route::put('/news/{news}', [NewsController::class, 'update'])->name('update_news');
Route::delete('/news/{news}', [NewsController::class, 'delete'])->name('delete_news');

Route::get('/events', [EventController::class, 'index']);
Route::post('/events', [EventController::class, 'store']);
Route::put('/events/{event}', [EventController::class, 'update']);
Route::delete('/events/{event}', [EventController::class, 'delete']);

Route::get('/members', [MemberController::class, 'index']);
Route::post('/members', [MemberController::class, 'store']);
Route::put('/members/{member}', [MemberController::class, 'update']);
Route::delete('/members/{member}', [MemberController::class, 'delete']);

