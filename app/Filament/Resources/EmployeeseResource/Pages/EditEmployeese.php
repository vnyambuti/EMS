<?php

namespace App\Filament\Resources\EmployeeseResource\Pages;

use App\Filament\Resources\EmployeeseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmployeese extends EditRecord
{
    protected static string $resource = EmployeeseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
