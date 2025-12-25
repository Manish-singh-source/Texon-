<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Banner;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $brands = Brand::where('status', 'active')->get();
        $banners = Banner::where('status', 'active')->get();
        $testimonials = Testimonial::where('status', 'active')->get();
        $blogs = Blog::where('status', 'published')->latest()->limit(3)->get();
        return view('frontend.index', compact('brands', 'banners', 'testimonials', 'blogs'));
    }

    public function category()
    {
        $categories = Category::where('status', 'active')->paginate(6);
        return view('frontend.category', compact('categories'));
    }

    public function products(Request $request)
    {
        $query = Product::where('status', 'active');
        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }
        $products = $query->paginate(3);
        return view('frontend.products', compact('products'));
    }

    public function productDetails($id)
    {
        $product = Product::with(['productBanners', 'aboutProducts', 'productKeyPoints', 'productGalleries', 'bannerVideos', 'productFeatures'])->findOrFail($id);
        return view('frontend.product-details', compact('product'));
    }
}