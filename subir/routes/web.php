<?php

use App\Http\Controllers\SubirControladores;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[SubirControladores::class, 'index'])->name('subir.index');
Route::post('subir',[SubirControladores::class, 'subir'])->name('subir.subier');
Route::get('view',[SubirControladores::class, 'view'])->name('subir.view');
Route::get('img/{file}',[SubirControladores::class, 'img'])->name('subir.img');