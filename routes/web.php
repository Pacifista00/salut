<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'index']);
Route::get('/form-pendaftaran', [MainController::class, 'formPage'])->name('form-pendaftaran');

Route::post('/daftar', [PendaftaranController::class, 'daftar'])->name('daftar');

Route::get('/dashboard', [DashboardController::class, 'index']);