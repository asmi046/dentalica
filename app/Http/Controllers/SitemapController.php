<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Page\Page;
use App\Models\Service;
use Carbon\Carbon;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = collect();

        // Главные страницы
        $urls->push([
            'loc' => url('/'),
            'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
            'changefreq' => 'daily',
            'priority' => '1.0',
        ]);

        // Отзывы
        $urls->push([
            'loc' => url('/all_rewiews'),
            'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
            'changefreq' => 'daily',
            'priority' => '1.0',
        ]);

        // Специалисты
        $urls->push([
            'loc' => url('/doctors'),
            'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
            'changefreq' => 'daily',
            'priority' => '1.0',
        ]);

        // Контакты
        $urls->push([
            'loc' => url('/contacts'),
            'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
            'changefreq' => 'weekly',
            'priority' => '0.9',
        ]);

        // Услуги
        $urls->push([
            'loc' => url('/services'),
            'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
            'changefreq' => 'weekly',
            'priority' => '0.9',
        ]);

        // Цены
        $urls->push([
            'loc' => url('/prices'),
            'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
            'changefreq' => 'weekly',
            'priority' => '0.9',
        ]);

        // Оборудование
        $urls->push([
            'loc' => url('/devices'),
            'lastmod' => Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
            'changefreq' => 'weekly',
            'priority' => '0.9',
        ]);

        // Страницы
        Page::all()->each(function ($item) use ($urls) {
            $urls->push([
                'loc' => url("/page/{$item->slug}"),
                'lastmod' => ($item->updated_at) ? $item->updated_at->format('Y-m-d\TH:i:s\Z') : Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                'changefreq' => 'monthly',
                'priority' => '0.6',
                'image' => $item->img ? url($item->img) : null,
            ]);
        });

        // Врачи
        Doctor::all()->each(function ($item) use ($urls) {
            $urls->push([
                'loc' => url("/doctors/{$item->slug}"),
                'lastmod' => ($item->updated_at) ? $item->updated_at->format('Y-m-d\TH:i:s\Z') : Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                'changefreq' => 'monthly',
                'priority' => '0.6',
                'image' => $item->img ? url($item->img) : null,
            ]);
        });

        // Услуги
        Service::all()->each(function ($item) use ($urls) {
            $urls->push([
                'loc' => url("/services/{$item->slug}"),
                'lastmod' => ($item->updated_at) ? $item->updated_at->format('Y-m-d\TH:i:s\Z') : Carbon::yesterday()->format('Y-m-d\TH:i:s\Z'),
                'changefreq' => 'monthly',
                'priority' => '0.6',
                'image' => $item->img ? url($item->img) : null,
            ]);
        });

        return response()->view('sitemap.index', compact('urls'))
            ->header('Content-Type', 'text/xml');
    }
}
