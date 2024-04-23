<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;

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
Route::get('/', [PegawaiController::class, 'index']);
Route::get('/pegawai',[PegawaiController::class,'create']);
Route::get('/login',[LoginController::class,'login']);
// Route::get('/',[PegawaiController::class, 'create']);
