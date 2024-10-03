<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index() {
        $all_sales = Sale::orderBy('order')->get();
        return view('sales-all', ['all_sales' => $all_sales]);
    }

    public function get_one($id) {
        $sale = Sale::where('id', $id)->first();
        if (!$sale)
            abort(403, 'Акция не найдена');
        return $sale;
    }
}
