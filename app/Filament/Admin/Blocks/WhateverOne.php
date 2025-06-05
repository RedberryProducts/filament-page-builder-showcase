<?php

namespace App\Filament\Admin\Blocks;

use Redberry\PageBuilderPlugin\Abstracts\BaseBlock;

class WhateverOne extends BaseBlock
{
    public static function getBlockSchema(): array
    {
        return [
            // schema
        ];
    }

    public static function getView(): ?string
    {
        return 'admin.blocks.whatever-one';
    }

//     public static function getCategory(): string
//     {
//         return 'Whatever';
//     }
}
