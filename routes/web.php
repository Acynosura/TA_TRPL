<?php

use App\Http\Controllers\AkunController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AkunController::class, 'view'])->name('main');
Route::get('/create', [AkunController::class, 'create'])->name('create');
Route::put('/store', [AkunController::class, 'store'])->name('store');

// Berkas
Route::get('/sidang', [AkunController::class, 'sidang'])->name('sidang');
Route::get('/yudisium', [AkunController::class, 'yudisium'])->name('yudisium');



