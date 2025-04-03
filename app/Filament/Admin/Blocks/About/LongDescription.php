<?php

namespace App\Filament\Admin\Blocks\About;

use Filament\Forms\Components\RichEditor;
use Redberry\PageBuilderPlugin\Abstracts\BaseBlock;

class LongDescription extends BaseBlock
{
    public static function blockSchema(): array
    {
        return [
            RichEditor::make('text')->required()
        ];
    }

    public static function getView(): ?string
    {
        return 'blocks.about.long-description';
    }
}
