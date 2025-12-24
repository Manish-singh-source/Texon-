<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    protected $fillable = [
        'product_id',
        'heading',
        'subheading',
        'description',
        'images',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
