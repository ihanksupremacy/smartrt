<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\searchcontroller;

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
    return view('/beranda/index');
});

Route::get('/cari', [App\Http\Controllers\Masyarakatcontroller::class, 'search'])->name('search.result');


Route::get('/sktm/{id}', [App\Http\Controllers\Masyarakatcontroller::class, 'sktm']);
Route::get('/statusperkawinan/{id}', [App\Http\Controllers\Masyarakatcontroller::class, 'statusperkawinan']);
Route::get('/bebaspajak/{id}', [App\Http\Controllers\Masyarakatcontroller::class, 'bebaspajak']);

Route::get('/tes', function () {
    return view('surat/bebaspajak');
});
Route::get('/tambah', function () {
    return view('beranda/tambah');
});
Route::post('/register', [App\Http\Controllers\MasyarakatController::class, 'tambah']);
Route::post('/hapus/{id}', [App\Http\Controllers\MasyarakatController::class, 'destroy']);

Route::get('/login', [App\Http\Controllers\userController::class, 'index']);
Route::post('/login', [App\Http\Controllers\userController::class, 'authenticate']);
Route::post('/logout', [App\Http\Controllers\userController::class, 'logout']);

Route::get('/data', [App\Http\Controllers\MasyarakatController::class, 'index'])->name('data');
Route::get('/caridata', [App\Http\Controllers\MasyarakatController::class, 'caridata']);

Route::get('/edit/{id}', [App\Http\Controllers\MasyarakatController::class, 'edit'])->name('edit');
Route::post('/edit/{id}', [App\Http\Controllers\MasyarakatController::class, 'update']);