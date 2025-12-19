<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'video_upload',
        'banner_image',
        'heading',
        'subheading',
        'button_name',
        'button_url',
        'status',
    ];
}
