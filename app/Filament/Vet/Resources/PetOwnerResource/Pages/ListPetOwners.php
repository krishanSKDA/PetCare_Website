<?php

namespace App\Filament\Vet\Resources\PetOwnerResource\Pages;

use App\Filament\Vet\Resources\PetOwnerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPetOwners extends ListRecords
{
    protected static string $resource = PetOwnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
