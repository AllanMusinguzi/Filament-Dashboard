<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\NumberInput;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('user_id')
                    ->label('User ID')
                    ->required()
                    ->numeric(),
                
                Select::make('order_type')
                    ->label('Order Type')
                    ->options([
                        'domain_registration' => 'Domain Name Registration',
                        'website_hosting' => 'Website Hosting',
                        'email_hosting' => 'Email Hosting',
                        'combos' => 'Combos of the Above',
                    ])
                    ->required(),

                NumberInput::make('amount')
                    ->label('Amount')
                    ->required()
                    ->minValue(0)
                    ->step(0.01),

                Textarea::make('details')
                    ->label('Details')
                    ->nullable(),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'completed' => 'Completed',
                        'canceled' => 'Canceled',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'),
                TextColumn::make('user_id')->label('User ID'),
                TextColumn::make('order_type')
                    ->label('Order Type')
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'domain_registration' => 'Domain Name Registration',
                        'website_hosting' => 'Website Hosting',
                        'email_hosting' => 'Email Hosting',
                        'combos' => 'Combos of the Above',
                    }),
                TextColumn::make('amount')->label('Amount'),
                TextColumn::make('details')->label('Details'),
                TextColumn::make('status')->label('Status'),
                TextColumn::make('created_at')->label('Created At')->dateTime(),
                TextColumn::make('updated_at')->label('Updated At')->dateTime(),
            ]);
    }
}
