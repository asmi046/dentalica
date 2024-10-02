<?php

namespace App\View\Components\Header;

use Closure;
use App\Models\Contact;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class TopControl extends Component
{
    public $phone;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->phone = \Cache::rememberForever('phone', function () {

            $phone = Contact::where('key', 'phone')->first();

            return $phone->value;
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header.top-control');
    }
}
