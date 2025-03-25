<?php

namespace App\View\Components;

use Closure;
use App\Models\Information;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class InformationInMain extends Component
{
    public $information_list;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->information_list = Information::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.information-in-main');
    }
}
