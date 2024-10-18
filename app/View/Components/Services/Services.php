<?php

namespace App\View\Components\Services;

use Closure;
use App\Models\Service;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Services extends Component
{
    public $all_services;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->all_services = Service::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services.services');
    }
}
