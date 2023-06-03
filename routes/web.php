<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RhkController;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\LaporanController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('sb-admin/main');
// });


Route::resource('rhk', RhkController::class);
Route::resource('arsip', ArsipController::class);
Route::resource('laporan', LaporanController::class);




Route::get('/logout', [HomeController::class, 'logout'])->name('logout')->middleware('auth');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
