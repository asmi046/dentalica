<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Review;
use MoonShine\Fields\ID;

use MoonShine\Fields\Url;
use MoonShine\Fields\Date;
use MoonShine\Fields\Text;
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
 * @extends ModelResource<Review>
 */
class ReviewResource extends ModelResource
{
    protected string $model = Review::class;

    protected string $title = 'Отзывы';


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
            Image::make('Аватар', 'img')->dir('reviews'),
            Text::make('Имя', 'name'),
            Text::make('Платформа', 'platform'),
            Number::make('Оценка', 'score'),
        ];
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function formFields(): array
    {
        return [
            ID::make()->sortable(),
            Image::make('Аватар', 'img')->dir('reviews'),
            Text::make('Имя', 'name'),
            Date::make('Дата отзыва', 'data'),
            Text::make('Платформа', 'platform'),
            Number::make('Оценка', 'score'),
            TinyMce::make('Отзыв', 'description'),
            Url::make('Ссылка на платформу', 'platform_lnk'),
        ];
    }

    /**
     * @return list<Field>
     */
    public function detailFields(): array
    {
        return [
            ID::make()->sortable(),
            Image::make('Аватар', 'img')->dir('reviews'),
            Text::make('Имя', 'name'),
            Date::make('Дата отзыва', 'data'),
            Text::make('Платформа', 'platform'),
            Number::make('Оценка', 'score'),
            TinyMce::make('Отзыв', 'description'),
            Url::make('Ссылка на платформу', 'platform_lnk'),
        ];
    }

    /**
     * @param Review $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
