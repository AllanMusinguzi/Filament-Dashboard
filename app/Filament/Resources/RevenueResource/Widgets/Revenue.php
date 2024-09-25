<?php

namespace App\Filament\Resources\RevenueResource\Widgets;

use Filament\Widgets\ChartWidget;

class Revenue extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
