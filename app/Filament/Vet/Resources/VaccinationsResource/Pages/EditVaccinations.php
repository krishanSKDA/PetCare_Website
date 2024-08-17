<?php

namespace App\Filament\Vet\Resources\VaccinationsResource\Pages;

use App\Filament\Vet\Resources\VaccinationsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVaccinations extends EditRecord
{
    protected static string $resource = VaccinationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
