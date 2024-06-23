<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_name',
        'website_url',
        'address',
        'email',
        'mobile',
        'logo',
        'logo_alt',
        'favicon',
        'favicon_alt',
        'robots',
        'description',
        'meta_title',
        'meta_keywords',
        'meta_description'
    ];
}
