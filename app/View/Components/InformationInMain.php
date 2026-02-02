<?php

namespace App\View\Components;

use App\Models\Information;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InformationInMain extends Component
{
    public $information_list;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->information_list = Information::where('active', true)->orderBy('order', 'ASC')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.information-in-main');
    }
}
