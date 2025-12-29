<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::middleware('auth:register')->group(function () {

        Route::get('/', function () {
            return view('index');
        })->name('index');
        Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');

        Route::delete('/products/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');

        Route::get('/add-new-product', [App\Http\Controllers\ProductController::class, 'create'])->name('add-new-product');

        Route::post('/add-new-product', [App\Http\Controllers\ProductController::class, 'store'])->name('add-new-product.store');

        Route::get('/view-product/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('view-product');

        Route::put('/view-product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('view-product.update');

        Route::patch('/products/{id}/toggle-status', [App\Http\Controllers\ProductController::class, 'toggleStatus'])->name('products.toggle-status');

        Route::post('/view-product/{productId}/store-banner', [App\Http\Controllers\ProductController::class, 'storeProductBanner'])->name('view-product.store-banner');

        Route::post('/view-product/{productId}/store-about', [App\Http\Controllers\ProductController::class, 'storeAboutProduct'])->name('view-product.store-about');

        Route::post('/view-product/{productId}/store-keypoints', [App\Http\Controllers\ProductController::class, 'storeProductKeyPoints'])->name('view-product.store-keypoints');

        Route::post('/view-product/{productId}/store-gallery', [App\Http\Controllers\ProductController::class, 'storeProductGallery'])->name('view-product.store-gallery');

        Route::post('/view-product/{productId}/store-banner-video', [App\Http\Controllers\ProductController::class, 'storeBannerVideo'])->name('view-product.store-banner-video');

        Route::post('/view-product/{productId}/store-features', [App\Http\Controllers\ProductController::class, 'storeProductFeatures'])->name('view-product.store-features');

        Route::get('/enquiries', [App\Http\Controllers\EnquiryController::class, 'index'])->name('enquiries');

        Route::get('/view-enquiry/{id}', [App\Http\Controllers\EnquiryController::class, 'show'])->name('view-enquiry');

        Route::get('/edit-enquiry/{id}', [App\Http\Controllers\EnquiryController::class, 'edit'])->name('edit-enquiry');

        Route::put('/edit-enquiry/{id}', [App\Http\Controllers\EnquiryController::class, 'update'])->name('edit-enquiry.update');

        Route::delete('/enquiries/{id}', [App\Http\Controllers\EnquiryController::class, 'destroy'])->name('enquiries.destroy');

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

        Route::get('/edit-testimonial/{id}', [App\Http\Controllers\TestimonialController::class, 'edit'])->name('edit-testimonial');

        Route::put('/edit-testimonial/{id}', [App\Http\Controllers\TestimonialController::class, 'update'])->name('edit-testimonial.update');

        Route::delete('/testimonials/{id}', [App\Http\Controllers\TestimonialController::class, 'destroy'])->name('testimonials.destroy');

        Route::post('/logout', [App\Http\Controllers\RegisterController::class, 'logout'])->name('logout');
        Route::get('/customers', [App\Http\Controllers\CustomerController::class, 'index'])->name('customers');
        Route::get('/add-customer', [App\Http\Controllers\CustomerController::class, 'create'])->name('add-customer');
        Route::post('/add-customer', [App\Http\Controllers\CustomerController::class, 'store'])->name('add-customer.store');
        Route::get('/edit-customer/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('edit-customer');
        Route::put('/edit-customer/{id}', [App\Http\Controllers\CustomerController::class, 'update'])->name('edit-customer.update');
        Route::delete('/customers/{id}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customers.destroy');
        Route::get('/view-customer/{id}', [App\Http\Controllers\CustomerController::class, 'show'])->name('view-customer');
        Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');

        Route::post('/categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');

        Route::get('/categories/{id}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');

        Route::put('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');

        Route::delete('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');
        Route::post('/categories/bulk-delete', [App\Http\Controllers\CategoryController::class, 'bulkDelete'])->name('categories.bulk-delete');
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
        Route::get('/add-featured-product', function () {
            return view('add-featured-products');
        })->name('add-featured-product');
        Route::post('/add-featured-product', [App\Http\Controllers\FeaturedProductController::class, 'store'])->name('add-featured-product.store');
        Route::get('/featured-products', [App\Http\Controllers\FeaturedProductController::class, 'index'])->name('featured-products');
        Route::get('/edit-featured-product/{id}', [App\Http\Controllers\FeaturedProductController::class, 'edit'])->name('edit-featured-product');
        Route::put('/edit-featured-product/{id}', [App\Http\Controllers\FeaturedProductController::class, 'update'])->name('edit-featured-product.update');
        Route::delete('/featured-products/{id}', [App\Http\Controllers\FeaturedProductController::class, 'destroy'])->name('featured-products.destroy');
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

        Route::get('/supports', [App\Http\Controllers\SupportController::class, 'index'])->name('supports');
    });

    Route::get('/register', [App\Http\Controllers\RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('register.store');
    Route::get('/login', [App\Http\Controllers\RegisterController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\RegisterController::class, 'login'])->name('login.store');
});








// Forntend part

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about-us', function () {
    return view('frontend.about-us');
})->name('about-us');

Route::get('/category', [App\Http\Controllers\HomeController::class, 'category'])->name('category');

Route::get('/portfolio', [App\Http\Controllers\HomeController::class, 'products'])->name('portfolio');

Route::get('/contact-us', function () {
    return view('frontend.contact-us');
})->name('contact-us');

Route::post('/contact-us', [App\Http\Controllers\SupportController::class, 'store'])->name('contact-us.store');

Route::get('/get-a-quote/{id}', [App\Http\Controllers\HomeController::class, 'getAQuote'])->name('get-a-quote');

Route::post('/get-a-quote/{id}', [App\Http\Controllers\HomeController::class, 'storeEnquiry'])->name('get-a-quote.store');

Route::get('/request-a-quote', function () {
    return view('frontend.request-a-quote');
})->name('request-a-quote');

Route::post('/request-a-quote', [App\Http\Controllers\SupportController::class, 'store'])->name('request-a-quote.store');

Route::get('/our-presence', [App\Http\Controllers\HomeController::class, 'ourPresence'])->name('our-presence');

Route::get('/blogs', function () {
    return view('frontend.blog');
})->name('blogs');

Route::get('/product-details/{id}', [App\Http\Controllers\HomeController::class, 'productDetails'])->name('product-details');

Route::get('/blog-details/{id}', [App\Http\Controllers\HomeController::class, 'blogDetails'])->name('blog-details');

Route::get('/api/search-products', [App\Http\Controllers\HomeController::class, 'searchProducts'])->name('api.search-products');
