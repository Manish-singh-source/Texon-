<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model
{
    protected $fillable = [
        'product_id',
        'type',
        'page_heading',
        'sub_heading',
        'title',
        'icon_image',
        'description',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
