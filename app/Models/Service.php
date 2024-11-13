<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'price',
        'time',
        'good_pacients',

        'resul',
        'adv',

        'img',
        'order',
        'description',
    ];

    public $casts = [
        'resul' => 'array',
        'adv' => 'array',
    ];
}
