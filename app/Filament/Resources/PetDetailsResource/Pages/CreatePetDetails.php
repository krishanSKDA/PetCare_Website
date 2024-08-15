<?php

namespace App\Filament\Resources\PetDetailsResource\Pages;

use App\Filament\Resources\PetDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePetDetails extends CreateRecord
{
    protected static string $resource = PetDetailsResource::class;
}
