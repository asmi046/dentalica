<?php

    use App\Http\Controllers\SaleController;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;
    use App\Http\Controllers\Page\PageController;

    Route::get('/', [IndexController::class, "index"])->name('home');

    Route::get('/sales_all', [SaleController::class, "index"])->name('sales_all');
    Route::get('/sale/{id}', [SaleController::class, "get_one"])->name('sales_get_one');


    Route::get('/page/{slug}', [PageController::class, "index"])->name('page');
