<?php

namespace App\Filament\Admin\Blocks;

use App\Filament\Admin\BlockCategories\Navigations;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Contracts\Support\Htmlable;
use Redberry\PageBuilderPlugin\Abstracts\BaseBlock;

class Tabs extends BaseBlock
{
    public static function getBlockSchema(): array
    {
        return [
            TextInput::make('label')->nullable(),
            Repeater::make('tabs')
                ->schema([
                    TextInput::make('title')->required(),
                    IconPicker::make('icon')->nullable()->preload()->columns(4),
                    Select::make('icon_position')
                        ->options([
                            'after' => __('After'),
                            'before' => __('Before'),
                        ])
                        ->visible(fn (Get $get) => (bool) $get('icon'))
                        ->default('before')
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
        return Navigations::class;
    }
}
