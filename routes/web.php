<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeaderController;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', [HeaderController::class, 'index']);
 
