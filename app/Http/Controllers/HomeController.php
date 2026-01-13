<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Brand;
use App\Models\Banner;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Models\Presence;
use App\Models\FeaturedProduct;
use App\Models\Enquiry;
use App\Models\PromotionalBanner;
use App\Mail\UserThankYouEmail;
use App\Mail\AdminEnquiryNotificationEmail;

class HomeController extends Controller
{
    public function index()
    {
        $brands = Brand::where('status', 'active')->get();
        $banners = Banner::where('status', 'active')->get();
        $testimonials = Testimonial::where('status', 'active')->get();
        $blogs = Blog::where('status', 'published')->latest()->limit(3)->get();
        $featuredProducts = FeaturedProduct::with('product')->where('status', 'active')->get();

        // Get active promotional banner within date range
        $promotionalBanner = PromotionalBanner::active()
            ->withinDateRange()
            ->first();

        return view('frontend.index', compact('brands', 'banners', 'testimonials', 'blogs', 'featuredProducts', 'promotionalBanner'));
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

        // Check if at least one section is active
        $hasActiveSection = $product->banner_active ||
                           $product->about_product_active ||
                           $product->key_points_active ||
                           $product->gallery_active ||
                           $product->banner_video_active ||
                           $product->features_active;

        // If no section is active, abort with 404
        if (!$hasActiveSection) {
            abort(404, 'Product details not available. Please activate at least one section from admin panel.');
        }

        return view('frontend.product-details', compact('product'));
    }

    public function blogs()
    {
        $blogs = Blog::where('status', 'published')->latest()->paginate(6);
        return view('frontend.blog', compact('blogs'));
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

    public function newsEvents()
    {
        $presences = Presence::where('status', 'published')->latest()->paginate(9);
        return view('frontend.news-events', compact('presences'));
    }

    public function presenceDetails($id)
    {
        $presence = Presence::findOrFail($id);
        return view('frontend.presence-details', compact('presence'));
    }

    public function getAQuote($id)
    {
        $product = Product::with(['productBanners', 'aboutProducts'])->findOrFail($id);
        return view('frontend.get-a-quote', compact('product'));
    }

    public function storeEnquiry(Request $request, $id)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company' => 'required|string|max:255',
            'message' => 'nullable|string',
            'application' => 'nullable|string',
        ]);

        $enquiryId = 'ENQ-' . strtoupper(uniqid());

        $enquiry = Enquiry::create([
            'enquiry_id' => $enquiryId,
            'product_id' => $id,
            'user_name' => $request->fname . ' ' . $request->lname,
            'user_email' => $request->email,
            'user_phone' => $request->phone,
            'company' => $request->company,
            'message' => $request->message,
            'application' => $request->application,
            'status' => 'pending',
        ]);

        // Load product relationship
        $enquiry->load('product');

        // Send thank you email to user
        Mail::to($enquiry->user_email)->send(new UserThankYouEmail($enquiry));

        // Send notification email to admin
        Mail::to(env('ADMIN_EMAIL'))->send(new AdminEnquiryNotificationEmail($enquiry));

        if ($request->ajax()) {
            return response()->json(['status' => 'success', 'message' => 'Your enquiry has been submitted successfully!']);
        }

        return redirect()->back()->with('success', 'Your enquiry has been submitted successfully!');
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