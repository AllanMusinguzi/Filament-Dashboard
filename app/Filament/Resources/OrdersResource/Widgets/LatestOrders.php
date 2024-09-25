<?php

namespace App\Filament\Resources\OrdersResource\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Orders; // Import your Order model

class LatestOrders extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(Orders::query()) // Pass a query to the query method
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('Order ID')->sortable(),
                Tables\Columns\TextColumn::make('total_amount')->label('Total Amount')->sortable(),
                Tables\Columns\TextColumn::make('status')->label('Status')->sortable(),
                // Add other columns as needed
            ]);
    }
}
