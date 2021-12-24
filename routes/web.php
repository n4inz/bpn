<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Post\DataPemohonController;
use App\Http\Controllers\DataPengukurController;
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
    // return view('welcome');

});

Route::post('/submitPemohon', [DataPemohonController::class, 'post']);
Route::get('/dashboard', [DashboardController::class , 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/data', [DataController::class , 'index'])->middleware(['auth'])->name('data');
Route::get('/data/pengukur', [DataPengukurController::class , 'index'])->middleware(['auth'])->name('datapengukur');
Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';



