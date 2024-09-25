<?php

namespace App\Filament\Resources\InvoicesResource\Widgets;

use Filament\Widgets\ChartWidget;

class Invoices extends ChartWidget
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
        return 'pie';
    }
}
