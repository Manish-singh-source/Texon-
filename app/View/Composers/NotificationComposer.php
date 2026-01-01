<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Log;

class NotificationComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        try {
            // Fetch recent UNREAD enquiries with product relationship
            $recentEnquiries = Enquiry::with('product')
                ->unread()
                ->orderBy('created_at', 'desc')
                ->limit(10)
                ->get();

            // Count unread enquiries
            $unreadCount = Enquiry::unread()->count();

            // Share data with the view
            $view->with([
                'recentEnquiries' => $recentEnquiries,
                'unreadEnquiriesCount' => $unreadCount
            ]);
        } catch (\Exception $e) {
            Log::error('NotificationComposer Error: ' . $e->getMessage());

            // Provide fallback data
            $view->with([
                'recentEnquiries' => collect([]),
                'unreadEnquiriesCount' => 0
            ]);
        }
    }
}

