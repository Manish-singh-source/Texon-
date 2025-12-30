<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PromotionalBanner extends Model
{
    protected $fillable = [
        'banner_image',
        'title',
        'start_date',
        'end_date',
        'description',
        'status',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    /**
     * Scope to get only active banners
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Scope to get only inactive banners
     */
    public function scopeInactive($query)
    {
        return $query->where('status', 'inactive');
    }

    /**
     * Scope to get banners within valid date range
     */
    public function scopeWithinDateRange($query)
    {
        $today = Carbon::today();
        return $query->where('start_date', '<=', $today)
                     ->where('end_date', '>=', $today);
    }

    /**
     * Check if banner is currently active and within date range
     */
    public function isCurrentlyActive()
    {
        $today = Carbon::today();
        return $this->status === 'active'
               && $this->start_date <= $today
               && $this->end_date >= $today;
    }
}
