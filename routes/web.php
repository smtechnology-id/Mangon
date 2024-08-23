<?php

use App\Http\Controllers\MangonController;
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

Route::get('/', [MangonController::class, 'index'])->name('index');

Route::get('/hitung/{kode}', [MangonController::class, 'hitung'])->name('hitung');
Route::post('/hitung/store', [MangonController::class, 'hitungStore'])->name('hitung.store');
Route::get('/result/{kode}', [MangonController::class, 'result'])->name('result');
