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
}
