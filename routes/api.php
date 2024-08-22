<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HasilIntegrasiController;
use App\Http\Controllers\KlaimController;
use App\Http\Controllers\LogAktivitasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [KlaimController::class, 'index'])->name('klaim');

Route::resource('klaim', KlaimController::class);
Route::resource('hasil_integrasi', HasilIntegrasiController::class);
Route::resource('log_aktivitas', LogAktivitasController::class);