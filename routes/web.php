<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/produk', [App\Http\Controllers\ProdukController::class, 'index']);
Route::get('/produk/create', [App\Http\Controllers\ProdukController::class, 'create']);
Route::post('/produk', [App\Http\Controllers\ProdukController::class, 'store']);
Route::get('/produk/{produk}/edit', [App\Http\Controllers\ProdukController::class, 'edit']);
Route::put('/produk/{produk}', [App\Http\Controllers\ProdukController::class, 'update']);
Route::delete('/produk/{produk}', [App\Http\Controllers\ProdukController::class, 'destroy']);
// Route::resource('/produk', App\Http\Controllers\ProdukController::class);
