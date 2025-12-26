<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Banner;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Models\Presence;
use App\Models\FeaturedProduct;

class HomeController extends Controller
{
    public function index()
    {
        $brands = Brand::where('status', 'active')->get();
        $banners = Banner::where('status', 'active')->get();
        $testimonials = Testimonial::where('status', 'active')->get();
        $blogs = Blog::where('status', 'published')->latest()->limit(3)->get();
        $featuredProducts = FeaturedProduct::where('status', 'active')->get();
        return view('frontend.index', compact('brands', 'banners', 'testimonials', 'blogs', 'featuredProducts'));
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

    public function blogDetails($id)
    {
        $blog = Blog::findOrFail($id);
        return view('frontend.blog-details', compact('blog'));
    }

    public function ourPresence()
    {
        $presences = Presence::where('status', 'active')->get();
        return view('frontend.our-presence', compact('presences'));
    }

    public function searchProducts(Request $request)
    {
        $query = $request->get('q');
        if (!$query) {
            return response()->json([]);
        }

        $products = Product::where('status', 'active')
            ->where('product_name', 'LIKE', '%' . $query . '%')
            ->limit(6)
            ->get(['id', 'product_name', 'product_thumbnail']);

        $results = $products->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->product_name,
                'thumbnail' => asset('storage/' . $product->product_thumbnail),
            ];
        });

        return response()->json($results);
    }
}