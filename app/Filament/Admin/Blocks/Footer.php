<?php

namespace App\Filament\Admin\Blocks;

use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Model;
use RedberryProducts\PageBuilderPlugin\Contracts\BaseBlock;

class Footer extends BaseBlock
{
    public static function blockSchema($record): array
    {
        return [
            TextInput::make('name'),
        ];
    }

    // public static function getCategory(): string
    // {
    //     return 'Footer';
    // }
}
