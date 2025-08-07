<?php

use App\Http\Controllers\PesertaController;
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

Route::get('/', [PesertaController::class, 'index']);
Route::POST('/', [PesertaController::class, 'store']);
Route::get('data-peserta', [PesertaController::class, 'dataPendaftar']);
