<?php

namespace App\Filament\Resources\Tables\Filters;

use Filament\Resources\Tables\Filter;

class Options extends Filter
{
    protected function setUp()
    {
        $this->name('options');
    }

    public function apply($query)
    {
        return $query;
    }
}
