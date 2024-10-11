<?php

namespace App\Filament\Resources\PetDetailsResource\Pages;

use App\Filament\Resources\PetDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPetDetails extends ListRecords
{
    protected static string $resource = PetDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
