<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\VideoMaterial;
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
 * @extends ModelResource<VideoMaterial>
 */
class VideoMaterialResource extends ModelResource
{
    protected string $model = VideoMaterial::class;

    protected string $title = 'Видеоматериалы';

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
            Image::make('Изображение', 'img')->removable(),
            Slug::make('Слаг', 'slug'),
            TinyMce::make('Короткое описание', 'description'),
            Text::make('Видео фрейм vk', 'video_frame'),
            Text::make('Видео файл', 'video_file'),
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
            Image::make('Изображение', 'img')->removable(),
            Slug::make('Слаг', 'slug'),
            TinyMce::make('Короткое описание', 'description'),
            Text::make('Видео фрейм vk', 'video_frame'),
            Text::make('Видео файл', 'video_file'),
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
     * @param  VideoMaterial  $item
     * @return array<string, string[]|string>
     *
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
        ];
    }
}
