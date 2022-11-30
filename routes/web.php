<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/data-kk', [AdminController::class, 'data']);
Route::get('/input-kk', [AdminController::class, 'input']);
Route::post('/keluarga-add', [AdminController::class, 'create_keluarga']);