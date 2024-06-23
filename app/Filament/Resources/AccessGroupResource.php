<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccessGroupResource\Pages;
use App\Filament\Resources\AccessGroupResource\RelationManagers;
use App\Filament\Roles;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class AccessGroupResource extends Resource
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
                Columns\Text::make('group_name')->sortable()->searchable(),
                Columns\Text::make('group_description'),
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
            Pages\ListAccessGroups::routeTo('/', 'index'),
            Pages\CreateAccessGroup::routeTo('/create', 'create'),
            Pages\EditAccessGroup::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
