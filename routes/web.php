<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get('/', [PersonController::class, 'index']);
Route::post('/add', [PersonController::class, 'create']);
Route::get('/thanks', [PersonController::class, 'thanks']);
