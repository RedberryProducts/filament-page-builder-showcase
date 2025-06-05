<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Blocks\Section;
use App\Filament\Admin\Blocks\Tabs;
use App\Filament\Admin\Blocks\WhateverOne;
use App\Filament\Admin\Resources\PageResource\Pages;
use App\Models\Page;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Redberry\PageBuilderPlugin\Components\Forms\PageBuilder;
use Redberry\PageBuilderPlugin\Components\Forms\PageBuilderPreview;
use Redberry\PageBuilderPlugin\Components\Infolist\PageBuilderEntry;
use Redberry\PageBuilderPlugin\Components\Infolist\PageBuilderPreviewEntry;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static array $blocks = [Section::class, Tabs::class, WhateverOne::class];

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                PageBuilderEntry::make('website_content')
                    ->blocks(self::$blocks)
                    ->columnSpan(1),
                PageBuilderPreviewEntry::make('website_content_preview')
                    ->blocks(self::$blocks)
                    ->columnSpan(2),
            ])
            ->columns(3);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->columnSpanFull(),
                PageBuilder::make('website_content')
                    ->blocks(self::$blocks)
                    ->renderWithThumbnails()
                    ->reorderable()
                    ->columnSpan(1),
                PageBuilderPreview::make('website_content_preview')
                    ->pageBuilderField('website_content')
                    ->columnSpan(2),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'view' => Pages\ViewPage::route('/{record}'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
