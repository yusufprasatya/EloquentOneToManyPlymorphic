<?php

use App\Http\Controllers\AplikasiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('input-beasiswa-1', [AplikasiController::class, 'inputBeasiswa1']);
Route::get('input-beasiswa-2', [AplikasiController::class, 'inputBeasiswa2']);

Route::get('tampil-beasiswa-1', [AplikasiController::class, 'tampilBeasiswa1']);
Route::get('tampil-beasiswa-1', [AplikasiController::class, 'tampilBeasiswa1']);
Route::get('tampil-beasiswa-1', [AplikasiController::class, 'tampilBeasiswa1']);
Route::get('tampil-beasiswa-1', [AplikasiController::class, 'tampilBeasiswa1']);

Route::get('wherehasmorph', [AplikasiController::class, 'wherehasmorph']);

Route::get('update-beasiswa', [AplikasiController::class, 'updateBeasiswa']);

Route::get('delete', [AplikasiController::class, 'delete']);