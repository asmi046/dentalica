<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoMaterial extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'author_name',
        'author_position',
    ];
}
