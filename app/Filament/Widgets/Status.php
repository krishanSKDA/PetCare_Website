<?php

namespace App\Filament\Widgets;

use App\Models\Appointment;
use App\Models\Inventory;
use App\Models\PetDetails;
use App\Models\Supplier;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Status extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Customers',User::count())
            ->description('Increase In Customers')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success')
            ->chart([7,3,4,5,6,5,3,4]),
            Stat::make('Total Suppliers',supplier::count())
            ->description('Total Suppliers')
            ->descriptionIcon('heroicon-m-truck')
            ->color('info')
            ->chart([2,8,6,3,5,7,3,4]),
            Stat::make('Profit(Rs.)',Inventory::sum('profit'))
            ->description('Increase In Profit')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('warning')
            ->chart([2,5,8,6,3,5,4,6]),
            Stat::make('Appoinments',Appointment::count())
            ->description('Appoinments Made')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success')
            ->chart([2,5,8,6,3,5,4,6])
        ];
    }
}
