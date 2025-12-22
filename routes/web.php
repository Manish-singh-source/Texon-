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

Route::get('/banners', [App\Http\Controllers\BannerController::class, 'index'])->name('banners');

Route::get('/add-banner', function () {
    return view('add-banner');
})->name('add-banner');

Route::post('/add-banner', [App\Http\Controllers\BannerController::class, 'store'])->name('add-banner.store');

Route::delete('/banners/{id}', [App\Http\Controllers\BannerController::class, 'destroy'])->name('banners.destroy');

Route::get('/edit-banner/{id}', [App\Http\Controllers\BannerController::class, 'edit'])->name('edit-banner');
Route::put('/edit-banner/{id}', [App\Http\Controllers\BannerController::class, 'update'])->name('edit-banner.update');

Route::get('/promotional-banners', [App\Http\Controllers\PromotionalBannerController::class, 'index'])->name('promotional-banners');

Route::get('/add-promotional-banner', [App\Http\Controllers\PromotionalBannerController::class, 'create'])->name('add-promotional-banner');

Route::post('/add-promotional-banner', [App\Http\Controllers\PromotionalBannerController::class, 'store'])->name('add-promotional-banner.store');

Route::delete('/promotional-banners/{id}', [App\Http\Controllers\PromotionalBannerController::class, 'destroy'])->name('promotional-banners.destroy');

Route::get('/edit-promotional-banner/{id}', [App\Http\Controllers\PromotionalBannerController::class, 'edit'])->name('edit-promotional-banner');
Route::put('/edit-promotional-banner/{id}', [App\Http\Controllers\PromotionalBannerController::class, 'update'])->name('edit-promotional-banner.update');

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
Route::get('/customers', [App\Http\Controllers\CustomerController::class, 'index'])->name('customers');
Route::get('/add-customer', [App\Http\Controllers\CustomerController::class, 'create'])->name('add-customer');
Route::post('/add-customer', [App\Http\Controllers\CustomerController::class, 'store'])->name('add-customer.store');
Route::get('/edit-customer/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('edit-customer');
Route::put('/edit-customer/{id}', [App\Http\Controllers\CustomerController::class, 'update'])->name('edit-customer.update');
Route::delete('/customers/{id}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customers.destroy');
Route::get('/view-customer/{id}', [App\Http\Controllers\CustomerController::class, 'show'])->name('view-customer');
Route::get('/categories', function () {
    return view('categories');
})->name('categories');
Route::get('/view-category', function () {
    return view('view-categories');
})->name('view-category');
Route::get('/add-brand', function () {
    return view('add-brands');
})->name('add-brand');
Route::get('/brands', function () {
    return view('brands');
})->name('brands');
Route::get('/view-brand', function () {
    return view('view-brands');
})->name('view-brand');