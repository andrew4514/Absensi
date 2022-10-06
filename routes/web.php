<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('auth.login');} )->name('login')->middleware('guest');

Route::resource('Tambah-Data-Keterangan', 'KetController');

Auth::routes();

Route::get('absensi', [App\Http\Controllers\HomeController::class, 'index'])->name('absensi')->middleware('auth');

