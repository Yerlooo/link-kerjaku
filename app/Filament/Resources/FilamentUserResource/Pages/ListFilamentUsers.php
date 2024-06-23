<?php

namespace App\Filament\Resources\FilamentUserResource\Pages;

use App\Filament\Resources\FilamentUserResource;
use Filament\Resources\Pages\ListRecords;

class ListFilamentUsers extends ListRecords
{
    public static $resource = FilamentUserResource::class;
}
