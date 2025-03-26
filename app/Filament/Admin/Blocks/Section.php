<?php

namespace App\Filament\Admin\Blocks;

use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Model;
use RedberryProducts\PageBuilderPlugin\Contracts\BaseBlock;

class Section extends BaseBlock
{
    public static function blockSchema($record): array
    {
        return [
            TextInput::make('name'),
        ];
    }
}
