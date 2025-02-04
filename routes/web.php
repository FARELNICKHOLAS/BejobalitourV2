<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BookController;

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
