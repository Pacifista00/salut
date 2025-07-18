<?php

use Illuminate\Auth\Middleware\Authenticate;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\AuthController;

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

// Route::get('/login', function () {
//     return view('admin.login');
// });

Route::get('/', [MainController::class, 'index']);
Route::get('/form-pendaftaran', [MainController::class, 'formPage'])->name('form-pendaftaran');

Route::post('/daftar', [PendaftaranController::class, 'daftar'])->name('daftar');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login-post', [AuthController::class, 'login'])->name('login-post');
});

Route::group(['middleware' => 'auth'], function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/fakultas', [FakultasController::class, 'index'])->name('fakultas');
    Route::post('/dashboard/fakultas/store', [FakultasController::class, 'store'])->name('store-fakultas');
    Route::put('/dashboard/fakultas/update/{id}', [FakultasController::class, 'update'])->name('update-fakultas');
    Route::delete('/dashboard/fakultas/destroy/{id}', [FakultasController::class, 'destroy'])->name('destroy-fakultas');

    Route::get('/dashboard/prodi', [ProdiController::class, 'index'])->name('prodi');
    Route::post('/dashboard/prodi/store', [ProdiController::class, 'store'])->name('store-prodi');
    Route::put('/dashboard/prodi/update/{id}', [ProdiController::class, 'update'])->name('update-prodi');
    Route::delete('/dashboard/prodi/destroy/{id}', [ProdiController::class, 'destroy'])->name('destroy-prodi');

    Route::get('/dashboard/pendaftar', [PendaftarController::class, 'index'])->name('pendaftar');
    Route::put('/dashboard/pendaftar/update/{id}', [PendaftarController::class, 'update'])->name('update-pendaftar');
    Route::delete('/dashboard/pendaftar/destroy/{id}', [PendaftarController::class, 'destroy'])->name('destroy-pendaftar');
});