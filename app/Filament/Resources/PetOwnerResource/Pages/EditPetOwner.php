<?php

namespace App\Filament\Resources\PetOwnerResource\Pages;

use App\Filament\Resources\PetOwnerResource;
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
