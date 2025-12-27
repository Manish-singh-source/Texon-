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
        'status',
    ];

    protected $casts = [
        'product_id' => 'integer',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
