<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\TableReservationController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| XML Sitemap
|--------------------------------------------------------------------------
|
| Public dynamic sitemap for Google Search Console.
|
| URL:
| /sitemap.xml
|
*/

Route::get(
    '/sitemap.xml',
    [SitemapController::class, 'index']
)->name('sitemap');


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
| English Blog Listing Page
|--------------------------------------------------------------------------
*/

Route::get(
    '/blog',
    [BlogController::class, 'index']
)->name('blog');


/*
|--------------------------------------------------------------------------
| English Single Blog Post Page
|--------------------------------------------------------------------------
*/

Route::get(
    '/blog/{slug}',
    [BlogController::class, 'show']
)->name('blog.show');


/*
|--------------------------------------------------------------------------
| Arabic Blog Listing Page
|--------------------------------------------------------------------------
|
| Example:
| /ar/blog
|
*/

Route::get(
    '/ar/blog',
    [BlogController::class, 'indexArabic']
)->name('blog.ar');


/*
|--------------------------------------------------------------------------
| Arabic Single Blog Post Page
|--------------------------------------------------------------------------
|
| Example:
| /ar/blog/المزة-المتوسطية-في-الدوحة
|
*/

Route::get(
    '/ar/blog/{slug}',
    [BlogController::class, 'showArabic']
)->name('blog.ar.show');


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


/*
|--------------------------------------------------------------------------
| Submit Table Reservation
|--------------------------------------------------------------------------
*/

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