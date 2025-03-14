<?php

namespace App\Filament\Admin\Blocks;

use Filament\Forms\Components\TextInput;
use RedberryProducts\PageBuilderPlugin\Contracts\BaseBlock;

class Header extends BaseBlock
{
    public static function getBlockSchema(): array
    {
        return [
            TextInput::make('name'),
        ];
    }
}
