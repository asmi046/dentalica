<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Contact;
use MoonShine\Fields\ID;

use MoonShine\Fields\Text;
use MoonShine\Fields\Field;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Contacts>
 */
class ContactResource extends ModelResource
{
    protected string $model = Contact::class;

    protected string $title = 'Контакты';

    public function import(): ?ImportHandler
    {
        return null;
    }

    public function export(): ?ExportHandler
    {
        return null;
    }

    public function getActiveActions(): array
    {
        return ['create', 'view', 'update'];
    }

    /**
     * @return list<Field>
     */
    public function indexFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Название', 'name'),
            Text::make('Ключ', 'key'),
            Text::make('Значение', 'value'),
        ];
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function formFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Название', 'name'),
            Text::make('Ключ', 'key'),
            Text::make('Значение', 'value'),
        ];
    }

    /**
     * @return list<Field>
     */
    public function detailFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Название', 'name'),
            Text::make('Ключ', 'key'),
            Text::make('Значение', 'value'),
        ];
    }

    /**
     * @param Contacts $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
