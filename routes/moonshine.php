<?php

use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     Lfm::routes();
 });
