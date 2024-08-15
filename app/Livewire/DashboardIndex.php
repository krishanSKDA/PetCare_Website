<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Arr;

class DashboardIndex extends Component
{
   
    public array $myChart = [
        'type' => 'bar', // Default to 'bar' chart
        'data' => [
            'labels' => ['2020', '2021', '2022', '2023'], // Example years
            'datasets' => [
                [
                    'label' => 'Products Purchased',
                    'data' => [120, 150, 80, 200], // Example purchase data
                    'backgroundColor' => [
                        'rgba(255, 99, 132, 0.2)', // Color for 2020
                        'rgba(54, 162, 235, 0.2)', // Color for 2021
                        'rgba(255, 206, 86, 0.2)', // Color for 2022
                        'rgba(75, 192, 192, 0.2)'  // Color for 2023
                    ],
                    'borderColor' => [
                        'rgba(255, 99, 132, 1)', // Border color for 2020
                        'rgba(54, 162, 235, 1)', // Border color for 2021
                        'rgba(255, 206, 86, 1)', // Border color for 2022
                        'rgba(75, 192, 192, 1)'  // Border color for 2023
                    ],
                    'borderWidth' => 1,
                ]
            ]
        ]
    ];
    
    
    public function randomize()
    {
        // Update this method to reflect dynamic data
        $this->myChart['data']['datasets'][0]['data'] = [
            fake()->numberBetween(50, 200),
            fake()->numberBetween(50, 200),
            fake()->numberBetween(50, 200),
            fake()->numberBetween(50, 200)
        ];
    }
    
    public function switch()
    {
        // Toggle between 'bar' and 'pie' chart types
        $type = $this->myChart['type'] === 'bar' ? 'pie' : 'bar';
        $this->myChart['type'] = $type;
    }
    public function render()
    {
        return view('livewire.dashboard-index');
    }
}
