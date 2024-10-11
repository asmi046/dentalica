<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'description',
        'price_list'
    ];

    public $cast = [
        'price_list' => 'object'
    ];
}
