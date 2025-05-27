<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KosController;
use App\Http\Controllers\LoginController;


Route::get('/user', function(){
    return view('pages.home');
});

Route::get('/search', [HomeController::class, 'search'])->name('kos.search');

Route::get('/login', function(){
    return view('pages.login');
});

Route::get('/register', function(){
    return view('pages.register');
});

Route::get('/semuaKos', function () {
    return view('pages.semuaKos');
});

Route::get('/myBookings', function () {
    return view('pages.myBookings');
})->name('mybookings');

// Route untuk halaman detail kos
Route::get('/kos/{id}', [KosController::class, 'show'])->name('pages.detailKos');

Route::get('pembayaran', function () {
    return view('pages.pembayaran');
})->name('pembayaran');

// Route untuk proses booking
// Route::post('/kos/{id}/booking', [KosController::class, 'booking'])->name('pages.myBookings');