<?php

namespace App\Filament\Admin\Blocks;

use App\Filament\Admin\BlockCategories\Indicators;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;
use phpDocumentor\Reflection\Types\Boolean;
use Redberry\PageBuilderPlugin\Abstracts\BaseBlock;

class Avatar extends BaseBlock
{
    public static function getBlockSchema(): array
    {
        return [
            TextInput::make('src')
                ->required()
                ->activeUrl(),
            TextInput::make('size')
                ->string(),
            TextInput::make('alt')
                ->string(),
            Toggle::make('circular')
        ];
    }

    public static function getThumbnail(): string|Htmlable|null
    {
        $url = url('/assets/avatar.png');
        return new HtmlString("<img style='object-fit: scale-down' src='$url' class='w-full h-32 rounded-lg mt-2'></img>");
    }


    public static function getView(): ?string
    {
        return 'admin.blocks.avatar';
    }

    public static function getCategory(): string
    {
        return Indicators::class;
    }
}
