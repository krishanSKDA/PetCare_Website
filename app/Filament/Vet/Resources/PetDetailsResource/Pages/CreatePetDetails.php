<?php

namespace App\Filament\Vet\Resources\PetDetailsResource\Pages;

use App\Filament\Vet\Resources\PetDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePetDetails extends CreateRecord
{
    protected static string $resource = PetDetailsResource::class;
}
