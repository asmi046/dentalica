<?php

namespace App\View\Components;

use Closure;
use App\Models\Contact;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ContactsList extends Component
{
    public $contacts;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->contacts = \Cache::rememberForever('contacts', function () {

            $all_options = Contact::all();
            $opt = [];

            foreach ($all_options as $otion) {
                $opt[$otion['key']] = $otion['value'];
            }
            return $opt;
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contacts-list');
    }
}
