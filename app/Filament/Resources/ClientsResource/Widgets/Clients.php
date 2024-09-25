<?php

namespace App\Filament\Resources\ClientsResource\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class Clients extends ChartWidget
{
    protected static ?string $heading = 'Client Overview';
    protected function getData(): array
    {
        // Fetch data from the database
        $clientsData = DB::table('clients')
            ->select(DB::raw('YEAR(registered_at) as year'), DB::raw('COUNT(*) as count'))
            ->groupBy('year')
            ->orderBy('year')
            ->pluck('count', 'year')
            ->toArray();
    
        // Prepare data for the line chart
        return [
            'labels' => array_keys($clientsData), // Years
            'datasets' => [
                [
                    'label' => 'Number of Clients Registered Each Year',
                    'data' => array_values($clientsData), // Counts
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 2,
                    'fill' => false, // Makes it a line graph
                    'lineTension' => 0.1, // Makes the line smooth
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
