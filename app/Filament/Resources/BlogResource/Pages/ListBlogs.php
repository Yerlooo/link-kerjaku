<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use Filament\Resources\Pages\ListRecords;

class ListBlogs extends ListRecords
{
    public static $resource = BlogResource::class;
}
