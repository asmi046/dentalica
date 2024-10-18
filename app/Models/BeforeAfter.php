<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeforeAfter extends Model
{
    use HasFactory;

    public $fillable = [
        'before_photo',
        'after_photo',
        'razdel',
        'title',
    ];
}
