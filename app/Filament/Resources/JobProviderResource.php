<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobProviderResource\Pages;
use App\Filament\Resources\JobProviderResource\RelationManagers;
use App\Filament\Roles;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class JobProviderResource extends Resource
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
                Columns\Text::make('job_title')->sortable()->searchable(),
                Columns\Image::make('berkas')->sortable()->searchable(),
                Columns\Text::make('company_name')->sortable()->searchable(),
                Columns\Text::make('email')->url(function ($customer) {
                    return "mailto:{$customer->email}";
                }),
                Columns\Text::make('required_skills')->sortable()->searchable(),
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
            Pages\ListJobProviders::routeTo('/', 'index'),
            Pages\CreateJobProvider::routeTo('/create', 'create'),
            Pages\EditJobProvider::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
