<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductKeyPoint extends Model
{
    protected $fillable = [
        'product_id',
        'type',
        'image',
        'title',
        'button',
        'url',
        'heading',
        'description',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
