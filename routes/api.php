<?php

use App\Http\Controllers\membercontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('member', [membercontroller::class, 'index'])->name('member.index');
Route::post('memberAdd', [membercontroller::class, 'store'])->name('member.store');
Route::patch('memberUpdate/{id}', [membercontroller::class, 'update'])->name('member.update');
Route::delete('memberDelete/{id}', [membercontroller::class, 'destroy'])->name('member.destroy');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
