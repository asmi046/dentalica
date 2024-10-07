<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;


use App\Models\Menu\Menu;
use MoonShine\Fields\Url;
use MoonShine\Fields\Text;
use MoonShine\Fields\Field;
use MoonShine\Fields\Number;
use MoonShine\Fields\Switcher;
use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Menu>
 */
class MenuResource extends ModelResource
{
    protected string $model = Menu::class;

    protected string $title = 'Меню';
    protected string $column = 'title';


    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Название', 'title'),
                Text::make('Ссылка', 'lnk'),
                Switcher::make('Отображать', 'enabled'),
                Number::make('Порядок сортировки', 'order')->sortable(),
            ]),
        ];
    }

    /**
     * @param Menu $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
