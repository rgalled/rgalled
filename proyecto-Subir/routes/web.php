<?php

use App\Http\Controllers\subirController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[subirController::class, 'index']);
Route::get('/',[subirController::class, 'show']);
Route::get('/',[subirController::class, 'create']);
Route::post('/',[subirController::class, 'store']);
