<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
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
| Blog Listing Page
|--------------------------------------------------------------------------
*/

Route::get(
    '/blog',
    [BlogController::class, 'index']
)->name('blog');


/*
|--------------------------------------------------------------------------
| Single Blog Post
|--------------------------------------------------------------------------
*/

Route::get(
    '/blog/{slug}',
    [BlogController::class, 'show']
)->name('blog.show');


/*
|--------------------------------------------------------------------------
| Book a Table - Reservation Page
|--------------------------------------------------------------------------
*/

Route::get(
    '/reserveatable',
    [
        TableReservationController::class,
        'create',
    ]
)->name(
    'reservations.create'
);


Route::post(
    '/reserveatable',
    [
        TableReservationController::class,
        'store',
    ]
)
    ->middleware(
        'throttle:10,1'
    )
    ->name(
        'reservations.store'
    );


/*
|--------------------------------------------------------------------------
| Contact Page
|--------------------------------------------------------------------------
*/

Route::get(
    '/contact',
    [ContactController::class, 'index']
)->name('contact');