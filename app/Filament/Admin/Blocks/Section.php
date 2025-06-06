<?php

namespace App\Filament\Admin\Blocks;

use App\Filament\Admin\BlockCategories\Separators;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;
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
        $url = url('/assets/section-dark.png');
        return new HtmlString("<img style='object-fit: scale-down' src='$url' class='w-full h-32 rounded-lg mt-2'></img>");
    }

    public static function getView(): ?string
    {
        return 'admin.blocks.section';
    }

    public static function getCategory(): string
    {
        return Separators::class;
    }
}
