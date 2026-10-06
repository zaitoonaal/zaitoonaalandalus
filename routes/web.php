<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Menu Page
Route::get('/menu', function () {
    return view('Home.menu'); // Make sure your file is: resources/views/Home/menu.blade.php
});

// Gallery Page
Route::get('/gallerypage', [GalleryController::class, 'index'])
    ->name('gallery');

// Blog Page
Route::get('/blog', function () {
    return view('Home.blog'); // Make sure your file is: resources/views/Home/blog.blade.php
});

// Book a Table (Reservation) Page
Route::get('/reserveatable', function () {
    return view('Home.reserveatable'); // Make sure your file is: resources/views/Home/reserveatable.blade.php
});

// Contact Page
Route::get('/contact', function () {
    return view('Home.contact'); // Make sure your file is: resources/views/Home/contact.blade.php
});