<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InventoryResource\Pages;
use App\Filament\Resources\InventoryResource\RelationManagers;
use App\Models\Inventory;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InventoryResource extends Resource
{
    protected static ?string $model = Inventory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('product_name')
                    ->label('Product Name')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('product_picture')
                    ->label('Product Picture')
                    ->image(),

                TextInput::make('quantity_in_stock')
                    ->label('Quantity in Stock')
                    ->required()
                    ->numeric()
                    ->default(0),

                TextInput::make('reorder_level')
                    ->label('Reorder Level')
                    ->numeric()
                    ->nullable(),

                TextInput::make('reorder_quantity')
                    ->label('Reorder Quantity')
                    ->numeric()
                    ->nullable(),

                TextInput::make('cost_per_unit')
                    ->label('Cost Per Unit')
                    ->numeric()
                    ->step(0.01)
                    ->nullable(),

                TextInput::make('selling_price')
                    ->label('Selling Price')
                    ->numeric()
                    ->step(0.01)
                    ->nullable(),

                TextInput::make('profit')
                    ->label('Profit')
                    ->numeric()
                    ->step(0.01)
                    ->nullable(),

                DatePicker::make('last_restocked_date')
                    ->label('Last Restocked Date')
                    ->nullable(),

                DatePicker::make('expiration_date')
                    ->label('Expiration Date')
                    ->nullable(),

                TextInput::make('type')
                    ->label('Type')
                    ->maxLength(255)
                    ->nullable(),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                        'discontinued' => 'Discontinued',
                    ])
                    ->default('active'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product_name')
                ->sortable()
                ->searchable(),
                
            Tables\Columns\ImageColumn::make('product_picture')
                ->sortable(),

            Tables\Columns\TextColumn::make('quantity_in_stock')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('reorder_level')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('reorder_quantity')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('cost_per_unit')
                ->sortable()
                ->money('USD'),

            Tables\Columns\TextColumn::make('selling_price')
                ->sortable()
                ->money('USD'),

            Tables\Columns\TextColumn::make('profit')
                ->sortable()
                ->money('USD'),

            Tables\Columns\TextColumn::make('last_restocked_date')
                ->date()
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('expiration_date')
                ->date()
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('type')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('status')
                ->sortable()
                ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInventories::route('/'),
            'create' => Pages\CreateInventory::route('/create'),
            'edit' => Pages\EditInventory::route('/{record}/edit'),
        ];
    }
}
