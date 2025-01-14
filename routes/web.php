<?php

use App\Http\Controllers\Detail_TransaksiController;
use App\Http\Controllers\laporanPenjualanController;
use App\Http\Controllers\membercontroller;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('transaksi', TransaksiController::class)->middleware('auth');
Route::resource('detail_transaksi', Detail_TransaksiController::class)->middleware('auth');
Route::resource('users', UsersController::class)->middleware('auth');
Route::resource('member', membercontroller::class)->middleware('auth');
Route::resource('outlet', OutletController::class)->middleware('auth');
Route::resource('paket', PaketController::class)->middleware('auth');
Route::get('/paket/paket_name/{id}', [PaketController::class, 'getPaket']);
Route::resource('laporanPenjualan', laporanPenjualanController::class)->middleware('auth');

require __DIR__.'/auth.php';