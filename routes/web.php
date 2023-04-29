<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\solusiController;
use App\Http\Controllers\tipeBelajarController;

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

Route::get('/home', function () {
    return view('Home.home');
});

Route::get('/tes', function () {
    return view('Home.tes');
});

Route::get('/hasil', function () {
    return view('Home.hasil');
});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::get('/tipe_Belajar', function () {
    return view('tipe_belajar.index');
});

Route::get('solusi', [solusiController::class, 'index']);
Route::get('/solusi/{kode}', [solusiController::class, 'show']);

Route::get('/infoAplikasi', function () {
    return view('tipe_belajar.infoAplikasi');
});
