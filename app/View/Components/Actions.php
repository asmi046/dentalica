<?php

namespace App\View\Components;

use Closure;
use App\Models\Sale;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Actions extends Component
{
    public $sale;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->sale = Sale::orderBy('order')->take(2)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.actions');
    }
}
