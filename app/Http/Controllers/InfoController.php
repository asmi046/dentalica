<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InfoController extends Controller
{

    public function get_one($id) {
        $sale = Information::where('id', $id)->first();
        if (!$sale)
            abort(403, 'Информация не найдена');
        return $sale;
    }
}
