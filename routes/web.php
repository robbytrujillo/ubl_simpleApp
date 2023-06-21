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

Route::get('/mahasiswa', function () {
    $mhs = App\Models\mahasiswa::all(); // Ganti dengan model dan data yang sesuai
    
    return view('mhs_v', ['mhs' => $mhs]);
});

Route::get('/add', [HomeController::class, 'add']);

Route::post('/insert', [HomeController::class, 'insert']);

Route::get('/edit/{id}', [HomeController::class, 'edit']);

Route::post('/update/{id}', [HomeController::class, 'update']);

Route::get('/delete/{id}', [HomeController::class, 'delete']);

Route::view('/hello', 'hello_v', ['nama' => 'Budi', 'alamat' => 'Jakarta']);

// nilaiController
Route::resource('nilai', NilaiController::class);

Route::post('nilai/cetak', [NilaiController::class, 'cetak'])->name('nilai.cetak');

Route::get('/nilai/cetak-laporan-nilai', 'NilaiController@show')->name('cetak.laporan');

Route::get('/cetak-laporan', 'NilaiController@cetakLaporan');

Route::get('/cetak-laporan', [NilaiController::class, 'cetakLaporan'])->name('cetak.laporan');

// MatkulController
Route::get('/matkul', function () {
    $matkul = App\Models\MataKuliah::all(); // Ganti dengan model dan data yang sesuai
    
    return view('matkul_v', ['matkul' => $matkul]);
});

Route::get('/add_matkul', [MatkulController::class, 'add_matkul']);

Route::post('/insert_matkul', [MatkulController::class, 'insert_matkul']);

Route::get('/edit_matkul/{id}', [MatkulController::class, 'edit_matkul']);

Route::post('/update_matkul/{id}', [MatkulController::class, 'update_matkul']);

Route::get('/delete_matkul/{id}', [MatkulController::class, 'delete_matkul']);

// NilaiController
Route::get('/nilaimhs', function () {
    $nilaimhs = App\Models\MataKuliah::all(); // Ganti dengan model dan data yang sesuai
    
    return view('nilaimhs_v', ['nilaimhs' => $nilaimhs]);
});

Route::get('/add_nilaimhs', [NilaiController::class, 'add_nilaimhs']);

Route::post('/insert_nilaimhs', [NilaiController::class, 'insert_nilaimhs']);

Route::get('/edit_nilaimhs/{id}', [NilaiController::class, 'edit_nilaimhs']);

Route::post('/update_nilaimhs/{id}', [NilaiController::class, 'update_nilaimhs']);

Route::get('/delete_nilaimhs/{id}', [NilaiController::class, 'delete_nilaimhs']);
