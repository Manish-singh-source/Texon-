<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutProduct extends Model
{
    protected $fillable = [
        'product_id',
        'images',
        'heading',
        'subheading',
        'description',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
