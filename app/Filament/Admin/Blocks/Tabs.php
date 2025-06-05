<?php

namespace App\Filament\Admin\Blocks;

use App\Filament\Admin\BlockCategories\Buttons;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\Support\Htmlable;
use Redberry\PageBuilderPlugin\Abstracts\BaseBlock;

class Tabs extends BaseBlock
{
    public static function getIsSelectionDisabled(): bool
    {
        return true;
    }

    public static function getBlockSchema(): array
    {
        return [
            Repeater::make('tabs')
                ->schema([
                    TextInput::make('id')->required()->alphaDash(),
                    TextInput::make('title')->required(),
                ])
                ->minItems(2),
        ];
    }

    public static function getThumbnail(): string|Htmlable|null
    {
        return 'https://placehold.co/600x400/000000/FFFFFF/png';
    }

    public static function getView(): ?string
    {
        return 'admin.blocks.tabs';
    }

    public static function getCategory(): string
    {
        return Buttons::class;
    }
}
