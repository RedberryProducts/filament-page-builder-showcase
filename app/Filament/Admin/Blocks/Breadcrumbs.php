<?php

namespace App\Filament\Admin\Blocks;

use App\Filament\Admin\BlockCategories\Navigations;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;
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

    public static function getThumbnail(): string|Htmlable|null
    {
        $url = url('/assets/breadcrumbs.png');
        return new HtmlString("<img style='object-fit: scale-down' src='$url' class='w-full h-32 rounded-lg mt-2'></img>");
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
