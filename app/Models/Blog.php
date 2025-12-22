<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'author',
        'category',
        'tags',
        'status',
        'published_date',
        'content',
        'featured_image',
    ];

    protected $casts = [
        'published_date' => 'date',
    ];
}
