<?php

namespace App\Filament\Admin\Blocks;

use App\Filament\Admin\BlockCategories\Navigations;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Redberry\PageBuilderPlugin\Abstracts\BaseBlock;

class Breadcrumbs extends BaseBlock
{
    public static function getBlockSchema(): array
    {
        return [
            Repeater::make('items')
                ->schema([
                    TextInput::make('label')
                        ->required(),
                    TextInput::make('url')
                        ->url()
                        ->required(),
                ])
        ];
    }

    public static function getView(): ?string
    {
        return 'admin.blocks.breadcrumbs';
    }

    public static function getCategory(): string
    {
        return Navigations::class;
    }

    public static function formatForSingleView(array $data): array
    {
        return [
            'items' => collect($data['items'] ?? [])
                ->mapWithKeys(function ($item) {
                    return [$item['url'] => $item['label']];
                })->toArray(),
        ];
    }
}
