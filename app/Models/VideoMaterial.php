<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoMaterial extends Model
{
    protected $fillable = [
        'title',
        'img',
        'slug',
        'description',
        'video_frame',
    ];
}
