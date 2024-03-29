<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PendidikanController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/data', [DataController::class, 'index'])->name('data');

Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan');

Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan');
