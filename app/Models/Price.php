<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'description',
        'price_list'
    ];

    public $casts = [
        'price_list' => 'array'
    ];
}
