<?php

namespace App\Filament\Vet\Widgets;

use Filament\Widgets\ChartWidget;

class Vetcharts extends ChartWidget
{
    protected static ?string $heading = 'Appoinments';

    protected function getData(): array
    {
        return [
            'datasets' =>[
                [
                'label' => 'Month',
                'data' =>[150,400,550,340,480,120],
                'borderColor' => 'orange',
                ]
                ],
                'labels'=>['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
                'borderColor' => 'rgb(75, 192, 192)',
        
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
