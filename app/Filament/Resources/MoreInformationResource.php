<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MoreInformationResource\Pages;
use App\Filament\Resources\MoreInformationResource\RelationManagers;
use App\Filament\Roles;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Columns\CustomImagePreviewColumn;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;
use ImageColumn;

class MoreInformationResource extends Resource
{
    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Columns\Text::make('gaji')->sortable()->searchable(),
                Columns\Image::make('img_sertifikat'),
                Columns\Image::make('img_cv'),
                Columns\Text::make('reason')->sortable()->searchable(),
            ])
            ->filters([
                //
            ]);
    }

    public static function relations()
    {
        return [
            //
        ];
    }

    public static function routes()
    {
        return [
            Pages\ListMoreInformation::routeTo('/', 'index'),
            Pages\CreateMoreInformation::routeTo('/create', 'create'),
            Pages\EditMoreInformation::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
