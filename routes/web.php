<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TableReservationController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Home Page
|--------------------------------------------------------------------------
*/

Route::get(
    '/',
    [HomeController::class, 'index']
)->name('home');


/*
|--------------------------------------------------------------------------
| Menu Page
|--------------------------------------------------------------------------
*/

Route::get(
    '/menu',
    [MenuController::class, 'index']
)->name('menu');


/*
|--------------------------------------------------------------------------
| Gallery Page
|--------------------------------------------------------------------------
*/

Route::get(
    '/gallerypage',
    [GalleryController::class, 'index']
)->name('gallery');


/*
|--------------------------------------------------------------------------
| Blog Page
|--------------------------------------------------------------------------
*/

Route::get('/blog', function () {

    return view('Home.blog');

})->name('blog');


/*
|--------------------------------------------------------------------------
| Book a Table - Reservation Page
|--------------------------------------------------------------------------
*/

Route::get('/reserveatable', function () {

    return view('Home.reserveatable');

})->name('reservations.create');


/*
|--------------------------------------------------------------------------
| Submit Table Reservation
|--------------------------------------------------------------------------
|
| Your reservation form uses:
|
| route('reservations.store')
|
| so this POST route must exist.
|
*/

Route::post(
    '/reserveatable',
    [
        TableReservationController::class,
        'store',
    ]
)
    ->middleware('throttle:10,1')
    ->name('reservations.store');


/*
|--------------------------------------------------------------------------
| Contact Page
|--------------------------------------------------------------------------
*/

Route::get(
    '/contact',
    [ContactController::class, 'index']
)->name('contact');