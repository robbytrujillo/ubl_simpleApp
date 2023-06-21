<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\MatkulController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/add', [HomeController::class, 'add']);

Route::post('/insert', [HomeController::class, 'insert']);

Route::get('/edit/{id}', [HomeController::class, 'edit']);

Route::post('/update/{id}', [HomeController::class, 'update']);

Route::get('/delete/{id}', [HomeController::class, 'delete']);

Route::view('/hello', 'hello_v', ['nama' => 'Budi', 'alamat' => 'Jakarta']);

Route::resource('nilai', NilaiController::class);

Route::post('nilai/cetak', [NilaiController::class, 'cetak'])->name('nilai.cetak');

Route::get('/nilai/cetak-laporan-nilai', 'NilaiController@show')->name('cetak.laporan');

Route::get('/cetak-laporan', 'NilaiController@cetakLaporan');

Route::get('/cetak-laporan', [NilaiController::class, 'cetakLaporan'])->name('cetak.laporan');

// MatkulController
Route::get('/add', [MatkulController::class, 'add']);

Route::post('/insert', [MatkulController::class, 'insert']);

Route::get('/edit/{id}', [MatkulController::class, 'edit']);

Route::post('/update/{id}', [MatkulController::class, 'update']);

Route::get('/delete/{id}', [MatkulController::class, 'delete']);


