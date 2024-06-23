<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApplicantLocationResource\Pages;
use App\Filament\Resources\ApplicantLocationResource\RelationManagers;
use App\Filament\Roles;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class ApplicantLocationResource extends Resource
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
                Columns\Text::make('kota'),
                Columns\Text::make('alamat_lengkap'),
                Columns\Text::make('pos_code'),
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
            Pages\ListApplicantLocations::routeTo('/', 'index'),
            Pages\CreateApplicantLocation::routeTo('/create', 'create'),
            Pages\EditApplicantLocation::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
