<?php

namespace App\Filament\Resources\Tables\Filters;

use Filament\Resources\Tables\Filter;

class ActiveFilter extends Filter
{
    protected function setUp()
    {
        $this->name('active');
    }

    public function apply($query)
    {
        return $query->where('is_active', true);
    }
}
