<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdminResource\Pages;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class AdminResource extends Resource
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
                Columns\Image::make('avatar'),
                Columns\Text::make('is_admin')->label('Active?'),
                Columns\Text::make('name')->sortable()->searchable(),
                Columns\Text::make('email'),
                Columns\Text::make('created_at'),
                Columns\Text::make('updated_at'),
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
            Pages\ListAdmins::routeTo('/', 'index'),
            Pages\CreateAdmin::routeTo('/create', 'create'),
            Pages\EditAdmin::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
