<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;


Route::get('/user', function(){
    return view('pages.home');
});

Route::get('/login', function(){
    return view('pages.login');
});

Route::get('/register', function(){
    return view('pages.register');
});