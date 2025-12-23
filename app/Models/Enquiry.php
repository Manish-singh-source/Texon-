<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'enquiry_id',
        'product_id',
        'user_name',
        'user_email',
        'user_phone',
        'message',
        'status',
    ];
}
