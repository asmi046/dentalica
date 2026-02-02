<?php

namespace App\View\Components\Doctors;

use App\Models\Doctor;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Doctors extends Component
{
    public $doctors;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->doctors = Doctor::where('active', true)->orderBy('order')->take(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.doctors.doctors');
    }
}
