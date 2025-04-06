<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Service;
use MoonShine\Fields\ID;

use MoonShine\Fields\Json;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\TinyMce;
use MoonShine\Decorations\Tab;
use MoonShine\Fields\Position;
use MoonShine\Decorations\Tabs;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Service>
 */
class ServiceResource extends ModelResource
{
    protected string $model = Service::class;

    protected string $title = 'Услуги';

    protected string $column = 'title';

    public function import(): ?ImportHandler
    {
        return null;
    }

    public function export(): ?ExportHandler
    {
        return null;
    }

    /**
     * @return list<Field>
     */
    public function indexFields(): array
    {
        return [
            ID::make()->sortable(),
            Image::make('Изображение', 'img')->dir('service'),
            Text::make('Название', 'title'),
            Number::make('Порядок сортировки', 'order')->sortable(),
        ];
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function formFields(): array
    {
        return [
            Tabs::make([

                Tab::make('Основные данные', [
                    ID::make()->sortable(),
                    Text::make('Название', 'title'),
                    Slug::make('Окончание сылки', 'slug'),
                    Text::make('Цена от', 'price'),
                    Text::make('Время выполнения', 'time'),
                    Text::make('good_pacients', 'good_pacients'),
                    Number::make('Порядок сортировки', 'order')->sortable(),
                    Image::make('Изображение', 'img')->dir('service'),
                    TinyMce::make('Описание', 'description'),
                    Json::make('Результаты', 'resul')->fields([
                        Position::make(),
                        Text::make('Заголовок', 'title')
                    ]),
                    Json::make('Преимущества', 'adv')->fields([
                        Position::make(),
                        Text::make('Заголовок', 'title')
                    ])
                ]),

                Tab::make('Данные лендинга', [
                    Text::make('Шаблон', 'template'),
                    Text::make('Заголовок лендинга', 'title_lend'),
                    Text::make('Подзаголовок лендинга', 'sub_title_lend'),
                    Image::make('Баннер лендинга', 'banner')->dir('lending')->removable(),
                    Json::make('Контент', 'lending_data')->fields([
                        Position::make(),
                        Text::make('Секция', 'part'),
                        Text::make('Заголовок', 'title'),
                        Text::make('Подзаголовок', 'sub_title'),
                        Image::make('Фото', 'picture')->dir('lending'),
                        TinyMce::make('Контент', 'content'),
                    ])->removable(),
                ]),
            ])
        ];
    }

    /**
     * @return list<Field>
     */
    public function detailFields(): array
    {
        return [
            Tabs::make([

                Tab::make('Основные данные', [
                    ID::make()->sortable(),
                    Text::make('Название', 'title'),
                    Slug::make('Окончание сылки', 'slug'),
                    Text::make('Цена от', 'price'),
                    Text::make('Время выполнения', 'time'),
                    Text::make('good_pacients', 'good_pacients'),
                    Number::make('Порядок сортировки', 'order')->sortable(),
                    Image::make('Изображение', 'img')->dir('service'),
                    TinyMce::make('Описание', 'description'),
                    Json::make('Результаты', 'resul')->fields([
                        Position::make(),
                        Text::make('Заголовок', 'title')
                    ]),
                    Json::make('Преимущества', 'adv')->fields([
                        Position::make(),
                        Text::make('Заголовок', 'title')
                    ])
                ]),

                Tab::make('Данные лендинга', [
                    Text::make('Заголовок лендинга', 'title_lend'),
                    Text::make('Подзаголовок лендинга', 'sub_title_lend'),
                    Image::make('Баннер лендинга', 'banner')->dir('lending'),
                    Text::make('Шаблон', 'template'),
                ]),
            ])


        ];
    }

    /**
     * @param Service $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
