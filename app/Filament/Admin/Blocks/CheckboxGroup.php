<?php

namespace App\Filament\Admin\Blocks;

use App\Filament\Admin\BlockCategories\Inputs;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;
use Redberry\PageBuilderPlugin\Abstracts\BaseBlock;

class CheckboxGroup extends BaseBlock
{
    public static function getBlockName(): string
    {
        return 'Checkbox group';
    }

    public static function getBlockSchema(): array
    {
        return [
            Repeater::make('checkboxes')
                ->schema([
                    TextInput::make('label')
                        ->string()
                        ->required(),
                ])->required()
                ->minItems(2)
        ];
    }

    public static function getView(): ?string
    {
        return 'admin.blocks.checkbox-group';
    }

    public static function getThumbnail(): string|Htmlable|null
    {
        $url = url('/assets/checkbox-group.png');
        return new HtmlString("<img style='object-fit: scale-down' src='$url' class='w-full h-32 rounded-lg mt-2'></img>");
    }

    public static function getCategory(): string
    {
        return Inputs::class;
    }
}
