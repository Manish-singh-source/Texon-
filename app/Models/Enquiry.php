<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Enquiry extends Model
{
    protected $fillable = [
        'enquiry_id',
        'product_id',
        'user_name',
        'user_email',
        'user_phone',
        'company',
        'message',
        'application',
        'status',
        'is_read',
    ];

    protected $casts = [
        'product_id' => 'integer',
        'is_read' => 'boolean',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    /**
     * Scope to get only unread enquiries
     */
    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }

    /**
     * Scope to get only read enquiries
     */
    public function scopeRead($query)
    {
        return $query->where('is_read', true);
    }

    /**
     * Get human-readable time difference from created_at
     *
     * @return string
     */
    public function getTimeAgoAttribute()
    {
        $diff = $this->created_at->diffInSeconds(now());

        if ($diff < 60) {
            return 'Just Now';
        } elseif ($diff < 3600) {
            $minutes = floor($diff / 60);
            return $minutes . ' min' . ($minutes > 1 ? 's' : '') . ' ago';
        } elseif ($diff < 86400) {
            $hours = floor($diff / 3600);
            return $hours . ' hour' . ($hours > 1 ? 's' : '') . ' ago';
        } elseif ($diff < 604800) {
            $days = floor($diff / 86400);
            return $days . ' day' . ($days > 1 ? 's' : '') . ' ago';
        } elseif ($diff < 2592000) {
            $weeks = floor($diff / 604800);
            return $weeks . ' week' . ($weeks > 1 ? 's' : '') . ' ago';
        } else {
            return $this->created_at->format('M d, Y');
        }
    }
}
