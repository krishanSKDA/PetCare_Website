<?php

namespace App\Filament\Vet\Resources\PetOwnerResource\Pages;

use App\Filament\Vet\Resources\PetOwnerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPetOwner extends EditRecord
{
    protected static string $resource = PetOwnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
