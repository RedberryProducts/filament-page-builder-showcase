<?php

namespace App\Filament\Admin\Blocks;

use App\Filament\Admin\BlockCategories\Inputs;
use Filament\Forms\Components\Checkbox as ComponentsCheckbox;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;
use Redberry\PageBuilderPlugin\Abstracts\BaseBlock;

class Checkbox extends BaseBlock
{
    public static function getBlockSchema(): array
    {
        return [
            TextInput::make('label')
                ->string()
                ->nullable()
        ];
    }

    public static function getView(): ?string
    {
        return 'admin.blocks.checkbox';
    }

    public static function getThumbnail(): string|Htmlable|null
    {
        $url = url('/assets/checkbox.png');
        return new HtmlString("<img style='object-fit: scale-down' src='$url' class='w-full h-32 rounded-lg mt-2'></img>");
    }

    public static function getCategory(): string
    {
        return Inputs::class;
    }
}
