<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', [BukuController::class, 'index']);
Route::get('tambah', [BukuController::class, 'tambah']);
Route::post('tambahbuku', [BukuController::class, 'tambahbuku']);
Route::get('edit/{id}', [BukuController::class, 'edit']);
Route::post('update/{id}', [BukuController::class, 'update']);
Route::get('delete/{id}', [BukuController::class, 'delete']);
