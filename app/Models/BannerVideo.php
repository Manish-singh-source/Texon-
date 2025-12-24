<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerVideo extends Model
{
    protected $table = 'banner_video';

    protected $fillable = [
        'product_id',
        'banner_image',
        'banner_video_url',
        'banner_title',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
