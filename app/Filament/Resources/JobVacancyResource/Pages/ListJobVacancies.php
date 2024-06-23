<?php

namespace App\Filament\Resources\JobVacancyResource\Pages;

use App\Filament\Resources\JobVacancyResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Tables\Columns;
use Filament\Resources\Tables\Filter;

class ListJobVacancies extends ListRecords
{
    public static $resource = JobVacancyResource::class;
}
