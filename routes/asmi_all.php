<?php

use App\Http\Controllers\BeforeAfterController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DevicesController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/sales_all', [SaleController::class, 'index'])->name('sales_all');
Route::get('/sale/{id}', [SaleController::class, 'get_one'])->name('sales_get_one');
Route::get('/info/{id}', [InfoController::class, 'get_one'])->name('info_get_one');

Route::get('/page/{slug}', [PageController::class, 'index'])->name('page');

Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors');
Route::get('/doctors/{slug}', [DoctorController::class, 'doctors_page'])->name('doctors_page');

Route::get('/all_rewiews', [ReviewController::class, 'index'])->name('rewiews');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');

Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{slug}', [ServiceController::class, 'services_page'])->name('services_page');

Route::get('/prices', [PriceController::class, 'index'])->name('prices');

Route::get('/before_after', [BeforeAfterController::class, 'index'])->name('before_after');

Route::get('/devices', [DevicesController::class, 'index'])->name('devices');

Route::get('/sitemap.xml', [SitemapController::class, 'index']);
