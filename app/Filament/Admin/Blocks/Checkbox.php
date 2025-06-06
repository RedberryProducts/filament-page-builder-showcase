<?php

namespace App\Filament\Admin\Blocks;

use App\Filament\Admin\BlockCategories\Inputs;
use Filament\Forms\Components\Checkbox as ComponentsCheckbox;
use Filament\Forms\Components\TextInput;
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

    public static function getCategory(): string
    {
        return Inputs::class;
    }
}
