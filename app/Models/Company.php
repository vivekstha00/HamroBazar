<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'logo',
        'playstore_link',
        'ios_link',
        'policy',
        'terms',
        'how_to_order',
    ];
}
