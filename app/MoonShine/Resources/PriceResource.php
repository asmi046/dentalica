<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Price;
use MoonShine\Fields\ID;

use MoonShine\Fields\Json;
use MoonShine\Fields\Text;
use MoonShine\Fields\Field;
use MoonShine\Fields\Position;
use MoonShine\Fields\Textarea;
use MoonShine\Decorations\Block;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Price>
 */
class PriceResource extends ModelResource
{
    protected string $model = Price::class;
    protected string $title = 'Цены';
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
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Названиераздела услуг', 'title'),
                Textarea::make('Описание раздела', 'description'),
                Json::make('Список цен', 'price_list')
                    ->fields([
                        Position::make(),
                        Text::make('Код', 'code'),
                        Text::make('Наименование', 'name'),
                        Text::make('Цена', 'price')
                    ])->hideOnIndex()
            ]),
        ];
    }

    /**
     * @param Price $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
