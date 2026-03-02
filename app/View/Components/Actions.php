<?php

namespace App\View\Components;

use App\Models\Sale;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Actions extends Component
{
    public $sale;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->sale = Sale::where('is_active', true)->orderBy('order')->take(2)->get();
        // dd($this->sale);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.actions');
    }
}
