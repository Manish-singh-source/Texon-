<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, DB, Log};
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;

class AnalyticsController extends Controller
{
    public function test()
    {
        $period = Period::days(7);

        $visitorsAndPageViews = Analytics::fetchVisitorsAndPageViews($period);
        $topPages = Analytics::fetchMostVisitedPages($period, 5);

        dd([
            'visitors_and_page_views' => $visitorsAndPageViews,
            'top_pages' => $topPages,
        ]);
    }

    public function dashboard()
    {
        try {
            $period = Period::days(7);
            // Fetch analytics data from GA4
            // Note: GA4 uses 'activeUsers' and 'screenPageViews' instead of 'visitors' and 'pageViews'
            $visitorsAndPageViews = Analytics::fetchVisitorsAndPageViews($period);
            $topPages = Analytics::fetchMostVisitedPages($period, 5);

            // Calculate totals using GA4 metric names
            // GA4 returns 'activeUsers' instead of 'visitors'
            // GA4 returns 'screenPageViews' instead of 'pageViews'
            $totalVisitors = $visitorsAndPageViews->sum('activeUsers');
            $totalPageViews = $visitorsAndPageViews->sum('screenPageViews');

            return view('analytics.dashboard', compact('totalVisitors', 'totalPageViews', 'topPages'));
        } catch (\Exception $e) {
            // Log the error
            Log::error('Analytics Dashboard Error: ' . $e->getMessage(), [
                'user_id' => Auth::id(),
                'trace' => $e->getTraceAsString()
            ]);

            // Set default values when error occurs
            $totalVisitors = 0;
            $totalPageViews = 0;
            $topPages = collect([]);
            $error = 'Unable to fetch analytics data. Please check your Google Analytics configuration. Error: ' . $e->getMessage();

            return view('analytics.dashboard', compact('totalVisitors', 'totalPageViews', 'topPages', 'error'));
        }
    }
}