<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\headerController;


Route::get('/',  [headerController::class, 'index']);


