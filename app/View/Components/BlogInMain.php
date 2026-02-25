<?php

namespace App\View\Components;

use App\Models\TextMaterial;
use App\Models\VideoMaterial;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogInMain extends Component
{
    public $texts_count;

    public $videos_count;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->texts_count = TextMaterial::count();
        $this->videos_count = VideoMaterial::count();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog-in-main');
    }
}
