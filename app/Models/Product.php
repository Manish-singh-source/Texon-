<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'tags',
        'category',
        'product_thumbnail',
        'image_gallery',
        'product_video',
    ];

    public function productBanners()
    {
        return $this->hasMany(ProductBanner::class);
    }

    public function aboutProducts()
    {
        return $this->hasMany(AboutProduct::class);
    }

    public function productKeyPoints()
    {
        return $this->hasMany(ProductKeyPoint::class);
    }

    public function productGalleries()
    {
        return $this->hasMany(ProductGallery::class);
    }

    public function bannerVideos()
    {
        return $this->hasMany(BannerVideo::class);
    }

    public function productFeatures()
    {
        return $this->hasMany(ProductFeature::class);
    }
}
