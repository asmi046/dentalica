<?php

namespace App\View\Components\Doctors;

use Closure;
use App\Models\Doctor;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Doctors extends Component
{
    public $doctors;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->doctors = Doctor::orderBy('order')->take(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.doctors.doctors');
    }
}
