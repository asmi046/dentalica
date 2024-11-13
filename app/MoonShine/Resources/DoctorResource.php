<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Doctor;
use MoonShine\Fields\ID;

use MoonShine\Fields\Slug;
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
 * @extends ModelResource<Doctor>
 */
class DoctorResource extends ModelResource
{
    protected string $model = Doctor::class;

    protected string $title = 'Специалисты';

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
            Image::make('Фото доктора', 'photo')->dir('doctors'),
            Text::make('Имя доктора', 'name'),
            Text::make('Должность', 'dolgnost'),
            Number::make('Порядок сортировки', 'order')
        ];
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function formFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Имя доктора', 'name'),
            Text::make('Должность', 'dolgnost'),
            Slug::make('Окончание сылки', 'slug'),
            Image::make('Фото доктора', 'photo')->dir('doctors'),
            Number::make('Порядок сортировки', 'order'),
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
            Text::make('Имя доктора', 'name'),
            Text::make('Должность', 'dolgnost'),
            Slug::make('Окончание сылки', 'slug'),
            Image::make('Фото доктора', 'photo')->dir('doctors'),
            Number::make('Порядок сортировки', 'order'),
            TinyMce::make('Короткое описание', 'short_description'),
            TinyMce::make('Описание', 'description'),
        ];
    }

    /**
     * @param Doctors $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
