<?php

namespace App\Filament\Admin\Blocks;

use App\Filament\Admin\BlockCategories\Sections;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Contracts\Support\Htmlable;
use Redberry\PageBuilderPlugin\Abstracts\BaseBlock;

class Section extends BaseBlock
{
    public static function getBlockSchema(): array
    {
        return [
            TextInput::make('heading')->required(),
            RichEditor::make('description')->required(),
            RichEditor::make('content')->required(),
            Toggle::make('collapsible'),
        ];
    }

    public static function getThumbnail(): string|Htmlable|null
    {
        return 'https://placehold.co/600x400/png';
    }

    public static function getView(): ?string
    {
        return 'admin.blocks.section';
    }

    // public static function getCategory(): string
    // {
    //     return Sections::class;
    // }
}
