<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});

Route::get('/destination', function () {
    return view('destination');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/bookform', function () {
    return view('bookform');
});

Route::get('/gallery', 
    [GalleryController::class, 'index']);

Route::get('/', [BookController::class, 'create'])->name('home');

Route::post('/tour-booking', [BookController::class, 'store'])->name('tour-booking.store');

Route::get('/destination', [TourController::class, 'index'])->name('destination');

Route::get('/destination/{slug}', [TourController::class, 'show'])->name('showpackages');    

Route::get('/', [HomeController::class, 'index'])->name('home');