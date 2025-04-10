<?php

namespace App\View\Components;

use Closure;
use App\Models\Select;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class WhySelect extends Component
{
    public $puncts;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->puncts = Select::select()->orderBy('order', 'ASC')->take(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.why-select');
    }
}
