<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;
use Barryvdh\Debugbar\Facades\Debugbar;

class PriceController extends Controller
{
    public function index() {
        $all_price = Price::all();

        Debugbar::info($all_price);

        return view('prices', ['prices' => $all_price]);
    }
}
