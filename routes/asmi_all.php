<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ReviewController;

use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Page\PageController;

Route::get('/', [IndexController::class, "index"])->name('home');

Route::get('/sales_all', [SaleController::class, "index"])->name('sales_all');
Route::get('/sale/{id}', [SaleController::class, "get_one"])->name('sales_get_one');


Route::get('/page/{slug}', [PageController::class, "index"])->name('page');

Route::get('/doctors', [DoctorController::class, "index"])->name('doctors');
Route::get('/doctors/{slug}', [PageController::class, "doctors_page"])->name('doctors_page');

Route::get('/all_rewiews', [ReviewController::class, "index"])->name('rewiews');
