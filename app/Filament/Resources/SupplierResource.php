<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SupplierResource\Pages;
use App\Filament\Resources\SupplierResource\RelationManagers;
use App\Models\Supplier;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use phpDocumentor\Reflection\Types\Nullable;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Textarea;

class SupplierResource extends Resource
{
    protected static ?string $model = Supplier::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Company Details')
                ->schema([
                    TextInput::make('company_name')
                        ->label('Company Name')
                        ->required()
                        ->maxLength(255),
    
                    TextInput::make('contact_person')
                        ->label('Contact Person')
                        ->required()
                        ->maxLength(255),
    
                    TextInput::make('email')
                        ->label('Email')
                        ->required()
                        ->email()
                        ->maxLength(255),
    
                    TextInput::make('phone_number')
                        ->label('Phone Number')
                        ->required()
                        ->tel()
                        ->maxLength(20),
    
                    TextInput::make('address')
                        ->label('Address')
                        ->required()
                        ->maxLength(255),
    
                    TextInput::make('website')
                        ->label('Website')
                        ->url()
                        ->maxLength(255),
                ]),
    
            Forms\Components\Section::make('Product Information')
                ->schema([
                    TextInput::make('product_types')
                        ->label('Product Types')
                        ->required()
                        ->maxLength(255),
                ]),
    
            Forms\Components\Section::make('Additional Information')
                ->schema([
                    Checkbox::make('is_active')
                        ->label('Is Active')
                        ->required(),
    
                    Textarea::make('notes')
                        ->label('Notes')
                        ->rows(3),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company_name')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('contact_person')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('email')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('phone_number')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('address')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('website')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('product_types')
                ->sortable()
                ->searchable()
                ->limit(50),

            Tables\Columns\IconColumn::make('is_active')
                ->boolean(),

            Tables\Columns\TextColumn::make('notes')
                ->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\ViewAction::make(),
                    ]),
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
            'index' => Pages\ListSuppliers::route('/'),
            'create' => Pages\CreateSupplier::route('/create'),
            'edit' => Pages\EditSupplier::route('/{record}/edit'),
        ];
    }
}
