<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    public $fillable = [
        'img',
        'order',
        'title',
        'short_description',
        'description'
    ];
}
