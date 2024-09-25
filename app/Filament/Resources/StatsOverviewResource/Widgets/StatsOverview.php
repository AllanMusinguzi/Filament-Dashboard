<?php

namespace App\Filament\Resources\StatsOverviewResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Revenue Expected Per Annum', 'Ugx. 23.51B')
            ->description('30% increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([16.23, 7.68, 30.98, 12.98, 20.87, 25.93, 40.51])
            ->color('success'),
            Stat::make('Amount Paid', 'Ugx. 18.04B')
            ->description('4.5% decrease')
            ->descriptionIcon('heroicon-m-arrow-trending-down')
            ->chart([15.16, 6.68, 30.98, 10.87, 15.13, 25.93, 26.99])
            ->color('danger'),
            Stat::make('Average Revenue Collected Per Annum', 'Ugx. 11.24B')
            ->description('3.5% increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([8.83, 3.68, 15.65, 6.98, 10.37, 12.85, 20.65])
            ->color('success'),
        ];
    }
}
