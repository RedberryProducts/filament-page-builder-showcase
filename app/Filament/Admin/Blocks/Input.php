<?php

namespace App\Filament\Admin\Blocks;

use App\Filament\Admin\BlockCategories\Inputs;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Redberry\PageBuilderPlugin\Abstracts\BaseBlock;

class Input extends BaseBlock
{
    public static function getBlockSchema(): array
    {
        return [
            TextInput::make('label'),
            Select::make('type')
                ->options([
                    'text' => 'Text',
                    'email' => 'Email',
                    'number' => 'Number',
                    'password' => 'Password',
                    'tel' => 'Telephone',
                    'url' => 'URL',
                ])
                ->default('text')
                ->required()
                ->columnSpanFull(),

        ];
    }

    public static function getView(): ?string
    {
        return 'admin.blocks.input';
    }

    public  static function getCategory(): string
    {
        return  Inputs::class;
    }
}
