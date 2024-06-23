<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformasiLainnyaResource\Pages;
use App\Filament\Resources\InformasiLainnyaResource\RelationManagers;
use App\Filament\Roles;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class InformasiLainnyaResource extends Resource
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
                Columns\Text::make('jenis_kelamin')->sortable()->searchable(),
                Columns\Text::make('pengalaman')->sortable()->searchable(),
                Columns\Text::make('posisi')->sortable()->searchable(),
                Columns\Text::make('jenjang_pendidikan')->url(function ($customer) {
                    return "mailto:{$customer->email}";
                }),
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
            Pages\ListInformasiLainnyas::routeTo('/', 'index'),
            Pages\CreateInformasiLainnya::routeTo('/create', 'create'),
            Pages\EditInformasiLainnya::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
