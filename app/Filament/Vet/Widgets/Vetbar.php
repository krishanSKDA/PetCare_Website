<?php

namespace App\Filament\Vet\Widgets;

use Filament\Widgets\ChartWidget;

class Vetbar extends ChartWidget
{
    protected static ?string $heading = 'Vaccinations';

    protected function getData(): array
    {
        return [
            'labels' => [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
],
'datasets' => [
    [
        'label' => 'Pet Vaccinations',
        'data' => [45, 60, 80, 50, 70, 90, 65, 75, 85, 55, 40, 95],
        'backgroundColor' => [
            'rgb(255, 99, 132)', 
            'rgb(54, 162, 235)', 
            'rgb(255, 205, 86)', 
            'rgb(75, 192, 192)', 
            'rgb(153, 102, 255)', 
            'rgb(255, 159, 64)',
            'rgb(201, 203, 207)', 
            'rgb(75, 192, 192)', 
            'rgb(255, 205, 86)', 
            'rgb(54, 162, 235)', 
            'rgb(255, 99, 132)', 
            'rgb(153, 102, 255)'
        ],
        'hoverOffset' => 4,
    ],
],
];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
