<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\headerController;
use App\Http\Controllers\loginController;


Route::get('/',  [headerController::class, 'index']);
Route::get('/login', [loginController::class, 'index'])->name('index');
Route::post('/login',[loginController::class,'authentication'])->name('auth');

