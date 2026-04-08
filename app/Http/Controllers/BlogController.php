<?php

namespace App\Http\Controllers;

use App\Models\TextMaterial;
use App\Models\VideoMaterial;

class BlogController extends Controller
{
    public function videos()
    {
        $videos = VideoMaterial::orderBy('created_at', 'desc')->paginate(12);

        return view('blog.videos', compact('videos'));
    }

    public function texts()
    {
        $texts = TextMaterial::orderBy('created_at', 'desc')->paginate(12);

        return view('blog.texts', compact('texts'));
    }

    public function video_page(string $slug)
    {
        $page = VideoMaterial::where('slug', $slug)->firstOrFail();

        return view('blog.page_video', compact('page'));
    }
    public function text_page(string $slug)
    {
        $page = TextMaterial::where('slug', $slug)->firstOrFail();

        return view('blog.page_text', compact('page'));
    }
}
