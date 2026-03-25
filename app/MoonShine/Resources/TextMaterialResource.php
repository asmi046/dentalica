<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\TextMaterial;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Field;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<TextMaterial>
 */
class TextMaterialResource extends ModelResource
{
    protected string $model = TextMaterial::class;

    protected string $title = 'Текстовые материалы';

    protected string $column = 'title';

    /**
     * @return list<Field>
     */
    public function indexFields(): array
    {
        return [
            Text::make('Заголовок', 'title'),
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
            Slug::make('Слаг', 'slug'),
            Image::make('Изображение', 'img')->removable(),
            Text::make('Хештеги', 'hash_tags'),
            TinyMce::make('Короткое описание', 'short_description'),
            TinyMce::make('Текст', 'text'),
            Text::make('Имя автора', 'author_name'),
            Text::make('Фото автора', 'author_photo'),
            Text::make('Должность автора', 'author_position'),
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
            Slug::make('Слаг', 'slug'),
            Image::make('Изображение', 'img')->removable(),
            Text::make('Хештеги', 'hash_tags'),
            TinyMce::make('Короткое описание', 'short_description'),
            TinyMce::make('Текст', 'text'),
            Text::make('Имя автора', 'author_name'),
            Text::make('Фото автора', 'author_photo'),
            Text::make('Должность автора', 'author_position'),
        ];
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function filters(): array
    {
        return [
            Text::make('Заголовок', 'title'),
        ];
    }

    /**
     * @param  TextMaterial  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'text' => ['required', 'string'],
        ];
    }
}
