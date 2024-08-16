<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;

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
Route::get('mahasiswa',[MahasiswaController::class, 'view']);
Route::get('/mahasiswa/create', [MahasiswaController::class,'create']);
Route::post('/mahasiswa/create', [MahasiswaController::class,'store']);
Route::get('/mahasiswa/{nim}/edit',[MahasiswaController::class,'edit']);
Route::get('/mahasiswa/{nim}/hapus',[MahasiswaController::class,'destroy']);
