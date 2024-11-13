<?php

declare(strict_types=1);

namespace App\Providers;

use Closure;
use MoonShine\MoonShine;
use MoonShine\Pages\Page;
use MoonShine\Menu\MenuItem;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuElement;
use App\MoonShine\Resources\SeoDataResource;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\PageResource;
use App\MoonShine\Resources\PriceResource;
use App\MoonShine\Resources\SaleResource;
use App\MoonShine\Resources\ReviewResource;
use App\MoonShine\Resources\DoctorResource;
use App\MoonShine\Resources\ServiceResource;
use App\MoonShine\Resources\ContactResource;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Providers\MoonShineApplicationServiceProvider;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    /**
     * @return list<ResourceContract>
     */
    protected function resources(): array
    {
        return [];
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [];
    }

    /**
     * @return Closure|list<MenuElement>
     */
    protected function menu(): array
    {
        return [
            MenuItem::make(
                static fn() => __('Мню'),
                new MenuResource()
            )->icon('heroicons.bars-3') ,


            MenuItem::make(
                static fn() => __('Страницы'),
                new PageResource()
            )->icon('heroicons.outline.clipboard-document'),

            MenuItem::make(
                static fn() => __('Специалисты'),
                new DoctorResource()
            )->icon('heroicons.outline.users'),

            MenuItem::make(
                static fn() => __('Отзывы'),
                new ReviewResource()
            )->icon('heroicons.outline.chat-bubble-oval-left-ellipsis'),

            MenuItem::make(
                static fn() => __('SEO'),
                new SeoDataResource()
            )->icon('heroicons.outline.chart-bar-square'),

            MenuItem::make(
                static fn() => __('Цена'),
                new PriceResource()
            )->icon('heroicons.outline.banknotes') ,

            MenuItem::make(
                static fn() => __('Услуги'),
                new ServiceResource()
            )->icon('heroicons.outline.rectangle-group') ,

            MenuItem::make(
                static fn() => __('Скидки'),
                new SaleResource()
            )->icon('heroicons.outline.receipt-percent') ,

            MenuItem::make(
                static fn() => __('Контакты'),
                new ContactResource()
            )->icon('heroicons.outline.phone') ,



            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.admins_title'),
                    new MoonShineUserResource()
                ),
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.role_title'),
                    new MoonShineUserRoleResource()
                ),
            ]),


        ];
    }

    /**
     * @return Closure|array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
