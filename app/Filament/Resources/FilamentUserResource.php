<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FilamentUserResource\Pages;
use App\Filament\Resources\FilamentUserResource\RelationManagers;
use App\Filament\Roles;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class FilamentUserResource extends Resource
{
    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\TextInput::make('name')->autofocus()->required(),
                Components\TextInput::make('email')->email()->required(),
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Columns\Image::make('avatar'),
                Columns\Boolean::make('is_admin')->label('Active?'),
                Columns\Text::make('name')->sortable()->searchable(),
                Columns\Text::make('email'),
                Columns\Text::make('created_at'),
                Columns\Text::make('updated_at'),
            ])
            ->filters([
                Filter::make('active', function ($query) {
                    return $query->where('is_admin', true);
                }),
                Filter::make('unactive', function ($query) {
                    return $query->where('is_admin', false);
                }),
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
            Pages\ListFilamentUsers::routeTo('/', 'index'),
            Pages\CreateFilamentUser::routeTo('/create', 'create'),
            Pages\EditFilamentUser::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
