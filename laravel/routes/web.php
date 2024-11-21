<?php
//package
use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Models\Furniture;
use Illuminate\Support\Facades\Route;

//1 pagina principal
Route::get('/', [MainController::class, 'main'])-> name('main');
//2 login
Route::get('login', [MainController::class, 'login'])-> name('login');
//3
Route::get('logout', [MainController::class, 'logout'])-> name('logout');
//4 7 rutas
Route::resource('product', ProductController::class);

Route::resource('furniture', FurnitureController::class);