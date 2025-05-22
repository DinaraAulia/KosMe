<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
