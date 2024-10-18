<?php

namespace App\Http\Controllers;

use App\Models\BeforeAfter;
use Illuminate\Http\Request;

class BeforeAfterController extends Controller
{
    public function index() {
        $exampls = BeforeAfter::all();

        return view('before-after', ['exampls' => $exampls]);
    }
}
