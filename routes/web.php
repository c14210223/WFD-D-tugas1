<?php

use App\Http\Controllers\PromotionController;
use Illuminate\Support\Facades\Route;

// Arahkan halaman utama ke daftar promosi
Route::get('/', [PromotionController::class, 'index'])->name('home');

// Daftarkan route resource untuk promosi
Route::resource('promotions', PromotionController::class);