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

    public function doctors_page($slug) {

        $doctor_info = Doctor::where('slug', $slug)->first();

        if (!$doctor_info) abort(404);

        return view('doctor-page', ['doctor_info' => $doctor_info]);
    }
}
