<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromotionalBanner extends Model
{
    protected $fillable = [
        'banner_image',
        'title',
        'start_date',
        'end_date',
        'description',
        'status',
    ];
}
