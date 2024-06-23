<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobVacancyResource\Pages;
use App\Filament\Resources\JobVacancyResource\RelationManagers;
use App\Filament\Roles;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;

class JobVacancyResource extends Resource
{
    public static $icon = 'heroicon-o-collection';

    public static function form(Form $form)
    {
        return $form
            ->schema([
                Components\TextInput::make('job_title')->required(),
                Components\TextInput::make('company_name')->required(),
                Components\TextInput::make('location')->required(),
                Components\TextInput::make('salary_range')->required(),
                Components\TextInput::make('posting_date')->required(),
                Components\TextInput::make('contact_email')->required(),
                Components\TextInput::make('contact_phone')->required(),
                Components\TextInput::make('experience_level')->required(),
                
            ]);
    }

    public static function table(Table $table)
    {
        return $table
            ->columns([
                Columns\Text::make('job_title')->searchable()->sortable(),
                Columns\Text::make('company_name')->searchable()->sortable(),
                Columns\Text::make('location')->sortable()->searchable(),
                Columns\Text::make('salary_range'),
                Columns\Text::make('posting_date'),
                Columns\Text::make('contact_email'),
                Columns\Text::make('contact_phone'),
                Columns\Text::make('experience_level')->sortable(),
            ])
            ->filters([
                
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
            Pages\ListJobVacancies::routeTo('/', 'index'),
            Pages\CreateJobVacancy::routeTo('/create', 'create'),
            Pages\EditJobVacancy::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
