<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnggotaController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'Authenticating'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::get('/data-kk', [AdminController::class, 'data'])->middleware('auth');
Route::get('/input-kk', [AdminController::class, 'input'])->middleware('auth');
Route::post('/keluarga-add', [AdminController::class, 'create_keluarga'])->middleware('auth');
Route::get('/detail-kk/{id}', [AdminController::class, 'show'])->middleware('auth');
Route::get('/edit-kk/{id}', [AdminController::class, 'edit_kk'])->middleware('auth');
Route::get('/input-anggota/{id}', [AdminController::class, 'input_anggota'])->middleware('auth');
Route::put('/update-keluarga/{id}', [AdminController::class, 'update_keluarga'])->middleware('auth');

Route::post('/anggota-add', [AdminController::class, 'create_anggota'])->middleware('auth');
Route::get('/edit-anggota/{id}', [AdminController::class, 'edit_anggota'])->middleware('auth');
Route::put('/update-anggota/{id}', [AdminController::class, 'update_anggota'])->middleware('auth');
Route::get('/delete-anggota/{id}', [AdminController::class, 'delete_anggota'])->middleware('auth');
Route::delete('/destroy-anggota/{id}', [AdminController::class, 'destroy_anggota'])->middleware('auth');