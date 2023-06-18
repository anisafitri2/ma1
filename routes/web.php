<?php

use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKelasController;
use App\Http\Controllers\DataPeminatanController;
use App\Http\Controllers\DataPondokController;
use App\Http\Controllers\LoginPengurusController;
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
    return view('admin.dashboard.index');
});

Route::get('/dashboard', [DashboardController::class, "index"]);
Route::get('/datasiswa', [DataSiswaController::class, "index"]);
Route::get('/datakelas', [DataKelasController::class, "index"]);
Route::get('/datapondok', [DataPondokController::class, "index"]);
Route::get('/datapeminatan', [DataPeminatanController::class, "index"]);



Route::get('/datapengurus', [LoginPengurusController::class, "index"]);
