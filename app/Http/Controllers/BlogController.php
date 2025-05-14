<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Menampilkan halaman blog (misalnya list postingan)
        return view('frontend.blog');
    }
}
