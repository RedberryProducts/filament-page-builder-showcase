<?php

namespace App\Filament\Admin\Blocks;

use App\Filament\Admin\BlockCategories\Indicators;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Redberry\PageBuilderPlugin\Abstracts\BaseBlock;

class Badge extends BaseBlock
{
    public static function getBlockSchema(): array
    {
        return [
            RichEditor::make('content')
                ->required()
                ->columnSpanFull(),
            Select::make('color')
                ->options([
                    'danger' => 'Danger',
                    'success' => 'Success',
                    'warning' => 'Warning',
                    'info' => 'Info',
                    'primary' => 'Primary',
                ]),
            Select::make('size')
                ->options([
                    'xs' => 'Extra Small',
                    'sm' => 'Small',
                    'md' => 'Medium',
                    'lg' => 'Large',
                ])
                ->default('md'),
        ];
    }

    public static function getView(): ?string
    {
        return 'admin.blocks.badge';
    }

    public static function getCategory(): string
    {
        return Indicators::class;
    }
}
