<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Sale;
use MoonShine\Fields\ID;

use MoonShine\Fields\Text;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\TinyMce;
use MoonShine\Fields\Switcher;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Sales>
 */
class SaleResource extends ModelResource
{
    protected string $model = Sale::class;

    protected string $title = 'Скидки';


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
            Image::make('Изображение', 'img')->dir('sales'),
            Text::make('Заголовок', 'title'),
            Number::make('Порядок сортировки', 'order')->sortable(),
        ];
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function formFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Заголовок', 'title'),
            Switcher::make('Активна ли акция', 'is_active'),
            Text::make('Подзаголовок', 'subtitle'),
            Number::make('Порядок сортировки', 'order')->sortable(),
            Image::make('Изображение', 'img')->dir('sales'),
            TinyMce::make('Описание', 'description'),
        ];
    }

    /**
     * @return list<Field>
     */
    public function detailFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Заголовок', 'title'),
            Text::make('Подзаголовок', 'subtitle'),
            Number::make('Порядок сортировки', 'order')->sortable(),
            Image::make('Изображение', 'img')->dir('sales'),
            TinyMce::make('Описание', 'description'),
        ];
    }

    /**
     * @param Sales $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
