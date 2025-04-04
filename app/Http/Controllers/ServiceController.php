<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        return view('services');
    }

    public function services_page($slug) {
        $service = Service::where('slug', $slug)->first();
        if (!$service) abort(404);
        $template = ($service->template)?$service->template:'services-page';

        return view($template, [ "service" => $service]);
    }
}
