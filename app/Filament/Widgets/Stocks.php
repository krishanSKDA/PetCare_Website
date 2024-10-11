<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class Stocks extends ChartWidget
{
    protected static ?string $heading = 'Stocks';

    protected function getData(): array
    {
        return [
                'labels' => [
                    'Dog Food',
                    'Cat Food',
                    'Pet Toys',
                    'Pet Beds',
                    'Pet Grooming Supplies',
                    'Aquarium Supplies'
                ],
                'datasets' => [
                    [
                        'label' => 'Stocks',
                        'data' => [370, 460, 580, 300, 410, 620],
                        'backgroundColor' => [
                            'rgb(255, 99, 132)', 
                            'rgb(54, 162, 235)', 
                            'rgb(255, 205, 86)', 
                            'rgb(75, 192, 192)', 
                            'rgb(153, 102, 255)', 
                            'rgb(255, 159, 64)'
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
