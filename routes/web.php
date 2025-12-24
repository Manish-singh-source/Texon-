<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
    
})->name('index'); 

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');

Route::delete('/products/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/add-new-product', [App\Http\Controllers\ProductController::class, 'create'])->name('add-new-product');

Route::post('/add-new-product', [App\Http\Controllers\ProductController::class, 'store'])->name('add-new-product.store');

Route::get('/view-product/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('view-product');

Route::put('/view-product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('view-product.update');

Route::post('/view-product/{productId}/store-banner', [App\Http\Controllers\ProductController::class, 'storeProductBanner'])->name('view-product.store-banner');

Route::post('/view-product/{productId}/store-about', [App\Http\Controllers\ProductController::class, 'storeAboutProduct'])->name('view-product.store-about');

Route::post('/view-product/{productId}/store-keypoints', [App\Http\Controllers\ProductController::class, 'storeProductKeyPoints'])->name('view-product.store-keypoints');

Route::post('/view-product/{productId}/store-gallery', [App\Http\Controllers\ProductController::class, 'storeProductGallery'])->name('view-product.store-gallery');

Route::post('/view-product/{productId}/store-banner-video', [App\Http\Controllers\ProductController::class, 'storeBannerVideo'])->name('view-product.store-banner-video');

Route::post('/view-product/{productId}/store-features', [App\Http\Controllers\ProductController::class, 'storeProductFeatures'])->name('view-product.store-features');

Route::get('/enquiries', [App\Http\Controllers\EnquiryController::class, 'index'])->name('enquiries');

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

Route::get('/testimonials', [App\Http\Controllers\TestimonialController::class, 'index'])->name('testimonials');

Route::get('/add-testimonial', [App\Http\Controllers\TestimonialController::class, 'create'])->name('add-testimonial');

Route::post('/add-testimonial', [App\Http\Controllers\TestimonialController::class, 'store'])->name('add-testimonial.store');

Route::delete('/testimonials/{id}', [App\Http\Controllers\TestimonialController::class, 'destroy'])->name('testimonials.destroy');

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
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');

Route::post('/categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
Route::get('/view-category', function () {
    return view('view-categories');
})->name('view-category');
Route::get('/add-brand', function () {
    return view('add-brands');
})->name('add-brand');
Route::post('/add-brand', [App\Http\Controllers\BrandController::class, 'store'])->name('add-brand.store');
Route::get('/brands', [App\Http\Controllers\BrandController::class, 'index'])->name('brands');
Route::get('/edit-brand/{id}', [App\Http\Controllers\BrandController::class, 'edit'])->name('edit-brand');
Route::put('/edit-brand/{id}', [App\Http\Controllers\BrandController::class, 'update'])->name('edit-brand.update');
Route::delete('/brands/{id}', [App\Http\Controllers\BrandController::class, 'destroy'])->name('brands.destroy');
Route::get('/view-brand', function () {
    return view('view-brands');
})->name('view-brand');
Route::get('/presence', [App\Http\Controllers\PresenceController::class, 'index'])->name('presence');
Route::get('/add-presence', function () {
    return view('add-presence');
})->name('add-presence');
Route::post('/add-presence', [App\Http\Controllers\PresenceController::class, 'store'])->name('add-presence.store');
Route::get('/edit-presence/{id}', [App\Http\Controllers\PresenceController::class, 'edit'])->name('edit-presence');
Route::put('/edit-presence/{id}', [App\Http\Controllers\PresenceController::class, 'update'])->name('edit-presence.update');
Route::delete('/presence/{id}', [App\Http\Controllers\PresenceController::class, 'destroy'])->name('presence.destroy');
Route::resource('blogs', App\Http\Controllers\BlogController::class);

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/add-blog', [App\Http\Controllers\BlogController::class, 'create'])->name('add-blog');
Route::post('/add-blog', [App\Http\Controllers\BlogController::class, 'store'])->name('add-blog.store');
Route::get('/view-blog/{id}', [App\Http\Controllers\BlogController::class, 'show'])->name('view-blog');
Route::get('/edit-blog/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('edit-blog');
Route::put('/edit-blog/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('edit-blog.update');
Route::delete('/blogs/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blogs.destroy');



// Forntend part

Route::get('/index', function () {
    return view('frontend.index');
})->name('home');

Route::get('/about-us', function () {
    return view('frontend.about-us');
})->name('about-us');

Route::get('/category', function () {
    return view('frontend.category');
})->name('category');

Route::get('/portfolio', function () {
    return view('frontend.products');
})->name('portfolio');

Route::get('/contact-us', function () {
    return view('frontend.contact-us');
})->name('contact-us');

Route::get('/get-a-quote', function () {
    return view('frontend.get-a-quote');
})->name('get-a-quote');

Route::get('/our-presence', function () {
    return view('frontend.our-presence');
})->name('our-presence');

Route::get('/blogs', function () {
    return view('frontend.blogs');
})->name('blogs');

Route::get('/product-details', function () {
    return view('frontend.product-details');
})->name('product-details');