<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'slug',
        'size',
        'color',
        'price',
        'inStock',
        'category_id',
        'cover_image_url',
        'product_name'
    ];
}
