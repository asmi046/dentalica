<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index() {
        $doctors = Doctor::orderBy('order')->get();
        return view('doctors-all', ["doctors" => $doctors]);
    }
}
