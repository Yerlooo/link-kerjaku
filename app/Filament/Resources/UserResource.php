<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Filament\Roles;
use Filament\Resources\Forms\Components;
use Filament\Resources\Forms\Form;
use Filament\Resources\Resource;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;
use Filament\Resources\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class UserResource extends Resource
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
                Columns\Text::make('name')->sortable()->searchable()
                ->except(Pages\ListUsers::class, function ($column) {
                    return $column->primary();
                }),

                Columns\Text::make('email')->url(function ($customer) {
                    return "mailto:{$customer->email}";
                }),
                Columns\Text::make('role_id')
                    ->options([
                        'individual' => 'Individual',
                        'organization' => 'Organization',
                    ]),
                Columns\Text::make('created_at'),
                Columns\Text::make('updated_at'),
            ])
            ->filters([
                Filter::make('name', function ($query) {
                    return $query->where('type', 'name');
                }),
                Filter::make('email', function ($query) {
                    return $query->where('type', 'email');
                }),
                Filter::make('active', function ($query) {
                    return $query->where('is_active', true);
                }),
                Filter::make('unactive', function ($query) {
                    return $query->where('is_active', false);
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
            Pages\ListUsers::routeTo('/', 'index'),
            Pages\CreateUser::routeTo('/create', 'create'),
            Pages\EditUser::routeTo('/{record}/edit', 'edit'),
        ];
    }
}
