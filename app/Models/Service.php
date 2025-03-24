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

        'title_lend',
        'sub_title_lend',
        'banner',
        'template',
        'lending_data',
    ];

    public $casts = [
        'resul' => 'array',
        'adv' => 'array',
        'lending_data' => 'array',
    ];
}
