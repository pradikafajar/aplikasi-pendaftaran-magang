<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Auth::routes();

//admin

Route::resource('admin', \App\Http\Controllers\adminhomeController::class)
    ->middleware('checkRole:admin');
Route::resource('dft', \App\Http\Controllers\dftController::class)
    ->middleware('checkRole:admin');
Route::resource('statuspengajuan', \App\Http\Controllers\statuspengajuanController::class)
    ->middleware('checkRole:admin');
Route::resource('uploadberkas', \App\Http\Controllers\uploadberkasController::class)
    ->middleware('checkRole:admin');
    
//user
Route::resource('daftar', \App\Http\Controllers\daftarController::class)
    ->middleware('auth');
    Route::resource('status', \App\Http\Controllers\statusController::class)
    ->middleware('auth');
    Route::resource('home', \App\Http\Controllers\homeController::class)
    ->middleware('auth');
    Route::resource('dashboard', \App\Http\Controllers\dashboardController::class)
    ->middleware('auth');
    Route::resource('upload', \App\Http\Controllers\uploadController::class)
    ->middleware('auth');

    