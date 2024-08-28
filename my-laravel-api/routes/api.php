<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// Menggunakan apiResource untuk otomatis membuat rute CRUD untuk ArticleController
Route::apiResource('articles', ArticleController::class);

// Mendapatkan data pengguna yang diautentikasi dengan middleware sanctum
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
