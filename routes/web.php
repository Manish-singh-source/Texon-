<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
    
})->name('index'); 

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/add-new-product', function () {
    return view('add-new-product');
})->name('add-new-product');

Route::get('/view-product', function () {
    return view('view-product');
})->name('view-product');

Route::get('/enquiries', function () {
    return view('enquiries');
})->name('enquiries');

Route::get('/view-enquiry', function () {
    return view('view-enquiry');
})->name('view-enquiry');

Route::get('/banners', function () {
    return view('banners');
})->name('banners');

Route::get('/add-banner', function () {
    return view('add-banner');
})->name('add-banner');

Route::get('/promotional-banners', function () {
    return view('promotional-banners');
})->name('promotional-banners');

Route::get('/add-promotional-banner', function () {
    return view('add-promotional-banner');
})->name('add-promotional-banner');

Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');

Route::get('/add-testimonial', function () {
    return view('add-testimonial');
})->name('add-testimonial');

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');