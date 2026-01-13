<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    protected $fillable = ['title', 'author', 'tags', 'status', 'published_date', 'content', 'featured_image'];

    protected $dates = ['published_date'];
}
