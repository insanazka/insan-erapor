<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;

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

Route::get('/',[LoginRegisterController::class, 'login'])->name('login');

Route::post('/register',[LoginRegisterController::class, 'register'])->name('register');

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/pengetahuan', 'pengetahuan')->name('pengetahuan');
    Route::get('/keterampilan', 'keterampilan')->name('keterampilan');
    Route::get('/register2', 'register2')->name('register2');
    Route::post('/logout', 'logout')->name('logout');
});