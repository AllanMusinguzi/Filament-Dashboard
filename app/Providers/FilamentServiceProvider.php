<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

// Import all your custom widgets
use App\Filament\Resources\OrdersResource\Widgets\LatestOrders;
// Add more widgets as needed
// use App\Filament\Resources\AnotherResource\Widgets\AnotherWidget;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // Register widgets globally for the dashboard
        Filament::registerWidgets([
            LatestOrders::class,
            // Add additional widgets here
            // AnotherWidget::class,
        ]);
    }
}
