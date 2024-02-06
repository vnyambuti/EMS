<?php

namespace App\Filament\Resources\EmployeeseResource\Pages;

use App\Filament\Resources\EmployeeseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEmployeeses extends ListRecords
{
    protected static string $resource = EmployeeseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
