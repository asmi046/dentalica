<?php

namespace App\Http\Controllers;

use App\Models\TextMaterial;
use App\Models\VideoMaterial;

class BlogController extends Controller
{
    public function videos()
    {
        $videos = VideoMaterial::paginate(12);

        return view('blog.videos', compact('videos'));
    }

    public function texts()
    {
        $texts = TextMaterial::paginate(12);

        return view('blog.texts', compact('texts'));
    }

    public function page(string $slug)
    {
        $page = TextMaterial::where('slug', $slug)->firstOrFail();

        return view('blog.page', compact('page'));
    }
}
