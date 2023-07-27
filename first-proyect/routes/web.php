<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome')->name('home');
Route::view('/contacto', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');

Route::get('/blog', [PostController::class, 'index'])->name('blog');
