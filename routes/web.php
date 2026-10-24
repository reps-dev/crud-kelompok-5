<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::resource('karyawan', \App\Http\Controllers\KaryawanController::class);