<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'message',
        'product',
        'page',
    ];
}
