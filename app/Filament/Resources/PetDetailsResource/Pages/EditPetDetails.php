<?php

namespace App\Filament\Resources\PetDetailsResource\Pages;

use App\Filament\Resources\PetDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPetDetails extends EditRecord
{
    protected static string $resource = PetDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
