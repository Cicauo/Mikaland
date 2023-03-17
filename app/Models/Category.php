<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table='category';

    protected $fillable = [
        'name',
        'location',
        'image',
        'about',
        'press_list',
        'brosur',
        'slogan',
        'slug',
        'tbl_title_category',
    ];

    
}
