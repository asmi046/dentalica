<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\Models\Review;
use App\Models\Service;
use MoonShine\Pages\Page;
use MoonShine\Decorations\Grid;
use MoonShine\Metrics\ValueMetric;
use MoonShine\Components\MoonShineComponent;

class Dashboard extends Page
{
    /**
     * @return array<string, string>
     */
    public function breadcrumbs(): array
    {
        return [
            '#' => $this->title()
        ];
    }

    public function title(): string
    {
        return $this->title ?: 'Клинека «Денталика»';
    }

    /**
     * @return list<MoonShineComponent>
     */
    public function components(): array
	{
		return [
            Grid::make([

                ValueMetric::make("Отзывы")
                    ->value(Review::all()->count())
                    ->columnSpan(4),
                ValueMetric::make("Страниц")
                    ->value(\App\Models\Page\Page::all()->count())
                    ->columnSpan(4),
                ValueMetric::make("Услуг")
                    ->value(Service::all()->count())
                    ->columnSpan(4),

            ]),
        ];
	}
}
