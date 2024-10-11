<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index() {
        $all_price = Price::all();
        return view('prices', ['prices' => $all_price]);
    }
}
