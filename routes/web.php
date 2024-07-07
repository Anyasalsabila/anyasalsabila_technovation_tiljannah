<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailContentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/detailContent', [DetailContentController::class, 'index'])->name('detailContent');

Route::get('/content', function () {
    return view('content');
})->name('content');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
