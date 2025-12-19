<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'gender',
        'date_of_birth',
        'customer_type',
        'gst_number',
        'pan_number',
        'company_name',
        'company_address',
        'city',
        'state',
        'country',
    ];
}
