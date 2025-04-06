<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use MoonShine\Fields\Text;

use App\Models\Information;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\TinyMce;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Information>
 */
class InformationResource extends ModelResource
{
    protected string $model = Information::class;

    protected string $title = 'Полезная информация';

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
            Text::make('Заголовок', 'title'),
            Image::make('Изображение', 'img')->dir('information'),
            Number::make('Порядок вывода', 'order'),

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
            Image::make('Изображение', 'img')->dir('information'),
            Number::make('Порядок вывода', 'order')->default(0),
            TinyMce::make('Короткое описание', 'short_description'),
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
            Image::make('Изображение', 'img')->dir('information'),
            Number::make('Порядок вывода', 'order'),
            TinyMce::make('Короткое описание', 'short_description'),
            TinyMce::make('Описание', 'description'),
        ];
    }

    /**
     * @param Information $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'img' => ($item->img === "")?['required']:[],
            'short_description' => ['required'],
            'description' => ['required'],
        ];
    }
}
