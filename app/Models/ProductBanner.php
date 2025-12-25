<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductBanner extends Model
{
    protected $fillable = [
        'product_id',
        'video_upload',
        'banner_image',
        'heading',
        'button_name',
        'button_url',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
