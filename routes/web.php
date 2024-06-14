<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebController::class, 'home']);

Route::get('/about', [WebController::class, 'about']);

Route::get('/contact', [WebController::class, 'contact']);