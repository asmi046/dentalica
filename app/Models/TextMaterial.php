<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TextMaterial extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'text',
        'author_name',
        'author_photo',
        'author_position',
        'seo_title',
        'seo_description',
    ];
}
