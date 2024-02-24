<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\SongController;

Route::post('/register', [RegisterController::class, 'register']); // ユーザー登録
Route::post('/login', [LoginController::class, 'login']); // ログイン
Route::apiResource('/songs', SongController::class)->only(['index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
