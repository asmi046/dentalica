<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'slug',
        'photo',
        'order',
        'dolgnost',
        'description',
        'short_description',
        'seo_title',
        'seo_description'
    ];
}
