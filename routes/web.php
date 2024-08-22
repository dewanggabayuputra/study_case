<?php

use App\Http\Controllers\HasilIntegrasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlaimController;
use App\Http\Controllers\LogAktivitasController;

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
//     return view('klaim/index', KlaimController::class);
// });

Route::get('/', [KlaimController::class, 'index'])->name('klaim.index');

Route::resource('klaim', KlaimController::class);
Route::post('klaim/integrasi', [KlaimController::class, 'integrasi'])->name('klaim.integrasi');
Route::get('lampiran', [KlaimController::class, 'lampiran'])->name('klaim.lampiran');


Route::resource('hasil_integrasi', HasilIntegrasiController::class);
Route::get('hasil_integrasi', [HasilIntegrasiController::class, 'index'])->name('hasil_integrasi.index');

Route::resource('log_aktivitas', LogAktivitasController::class);
Route::get('log_aktivitas', [LogAktivitasController::class, 'index'])->name('log_aktivitas.index');

