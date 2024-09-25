<?php

namespace App\Filament\Resources\ContractsResource\Widgets;

use Filament\Widgets\Widget;

class Contracts extends Widget
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
