<?php

namespace App\Filament\Admin\Blocks;

use App\Filament\Admin\BlockCategories\Inputs;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
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

    public static function getCategory(): string
    {
        return Inputs::class;
    }
}
