<?php

namespace App\Filament\Admin\BlockCategories;

use Redberry\PageBuilderPlugin\Abstracts\BaseBlockCategory;

class Sections extends BaseBlockCategory
{
    public static function getCategoryName(): string
    {
        return 'Sections';
    }
}
