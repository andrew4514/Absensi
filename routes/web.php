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

Route::get('/', function () {  
    return view('auth.login');
});


// hak akses
Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
Route::get('siswa', function () { return view('siswa'); })->middleware('checkRole:siswa');

Auth::routes();

Route::get('siswa', [App\Http\Controllers\HomeController::class, 'index'])->middleware('checkRole:siswa');


// restytfvbiuyghjiygbjyfhg