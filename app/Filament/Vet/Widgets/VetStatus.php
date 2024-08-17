<?php

namespace App\Filament\Vet\Widgets;

use App\Models\PetOwner;
use App\Models\vaccinations;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

use App\Models\Appointment;
use Filament\Widgets\StatsOverviewWidget\Stat;

class VetStatus extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Appoinments',Appointment::count())
            ->description('Appoinments Made')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('warning')
            ->chart([2,5,8,6,3,5,4,6]),
            Stat::make('Vaccinations',vaccinations::count())
            ->description('Vaccinations Made')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('warning')
            ->chart([2,5,8,6,3,5,4,6]),
            Stat::make('PetOwners',PetOwner::count())
            ->description('Pet Owners')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('warning')
            ->chart([2,5,8,6,3,5,4,6])
        ];
    }
}
