<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/user', function(){
    return view('pages.home');
});

Route::get('/search', [HomeController::class, 'search'])->name('kos.search');
