<?php

namespace App\Filament\Admin\BlockCategories;

use Illuminate\View\ComponentAttributeBag;
use Redberry\PageBuilderPlugin\Abstracts\BaseBlockCategory;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;

class Buttons extends BaseBlockCategory
{
    public static function getCategoryName(): string
    {
        return 'Buttons';
    }

    public static function getCategoryIcon(): ?string
    {
        return 'heroicon-o-hand-raised';
    }

    public static function getCategoryAttributes(): ComponentAttributeBag
    {
        return new ComponentAttributeBag([
            'class' => 'bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200',
        ]);
    }
}
