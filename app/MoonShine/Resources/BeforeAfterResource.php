<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use MoonShine\Fields\Text;

use App\Models\BeforeAfter;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<BeforeAfter>
 */
class BeforeAfterResource extends ModelResource
{
    protected string $model = BeforeAfter::class;

    protected string $title = 'До - После';

    /**
     * @return list<Field>
     */
    public function indexFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Заголовок', 'title'),
            Text::make('Раздел', 'razdel'),
            Image::make('До', 'before_photo')->dir('before_after'),
            Image::make('После', 'after_photo')->dir('before_after'),
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
            Text::make('Раздел', 'razdel'),
            Image::make('До', 'before_photo')->dir('before_after'),
            Image::make('После', 'after_photo')->dir('before_after'),
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
            Text::make('Раздел', 'razdel'),
            Image::make('До', 'before_photo')->dir('before_after'),
            Image::make('После', 'after_photo')->dir('before_after'),
        ];
    }

    /**
     * @param BeforeAfter $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'title' => ['required'],
            'before_photo' => ($item->before_photo === "")?['required']:[],
            'after_photo' => ($item->after_photo === "")?['required']:[],
        ];
    }
}
