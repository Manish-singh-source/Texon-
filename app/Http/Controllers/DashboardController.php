<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, DB, Log};
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;
use App\Models\Enquiry;
use App\Models\Product;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\Brand;
use App\Models\Customer;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch counts and data for dashboard
        $totalEnquiries = Enquiry::count();
        $pendingEnquiries = Enquiry::where('status', 'pending')->count();
        $repliedEnquiries = Enquiry::where('status', 'replied')->count();
        $newEnquiries = Enquiry::where('status', 'new')->count();

        $totalProducts = Product::count();
        $activeProducts = Product::where('status', 'active')->count();
        $inactiveProducts = Product::where('status', 'inactive')->count();
        $newProducts = Product::where('status', 'active')->where('created_at', '>=', now()->subDays(30))->count(); // Assuming new in last 30 days

        $totalCategories = Category::count();
        $activeCategories = Category::where('status', 'active')->count();
        $subCategories = 0; // No parent_id in model
        $emptyCategories = 0; // Categories not linked to products via relationship

        $totalTestimonials = Testimonial::count();
        $publishedTestimonials = Testimonial::where('status', 'published')->count();
        $pendingTestimonials = Testimonial::where('status', 'pending')->count();
        $fiveStarTestimonials = Testimonial::where('rating', 5)->count();

        $totalBrands = Brand::count();
        $activeBrands = Brand::where('status', 'active')->count();
        $inactiveBrands = Brand::where('status', 'inactive')->count();
        $premiumBrands = $activeBrands; // No is_premium field, assuming active are premium

        $totalCustomers = Customer::count();
        $activeCustomers = 0; // No status field
        $newCustomers = Customer::where('created_at', '>=', now()->subDays(30))->count();
        $vipCustomers = Customer::where('customer_type', 'vip')->count();

        // Recent enquiries
        $recentEnquiries = Enquiry::with('product')->latest()->limit(3)->get();

        // Top products (assuming based on enquiries or sales, but since no sales, maybe by creation or random)
        $topProducts = Product::latest()->limit(3)->get();

        // Fetch analytics data
        try {
            $period = Period::days(7);
            $visitorsAndPageViews = Analytics::fetchVisitorsAndPageViews($period);
            $topPages = Analytics::fetchMostVisitedPages($period, 5);

            $totalVisitors = $visitorsAndPageViews->sum('activeUsers');
            $totalPageViews = $visitorsAndPageViews->sum('screenPageViews');
        } catch (\Exception $e) {
            Log::error('Analytics Dashboard Error: ' . $e->getMessage(), [
                'user_id' => Auth::id(),
                'trace' => $e->getTraceAsString()
            ]);

            $totalVisitors = 0;
            $totalPageViews = 0;
            $topPages = collect([]);
        }

        return view('index', compact(
            'totalEnquiries', 'pendingEnquiries', 'repliedEnquiries', 'newEnquiries',
            'totalProducts', 'activeProducts', 'inactiveProducts', 'newProducts',
            'totalCategories', 'activeCategories', 'subCategories', 'emptyCategories',
            'totalTestimonials', 'publishedTestimonials', 'pendingTestimonials', 'fiveStarTestimonials',
            'totalBrands', 'activeBrands', 'inactiveBrands', 'premiumBrands',
            'totalCustomers', 'activeCustomers', 'newCustomers', 'vipCustomers',
            'recentEnquiries', 'topProducts',
            'totalVisitors', 'totalPageViews', 'topPages'
        ));
    }
}