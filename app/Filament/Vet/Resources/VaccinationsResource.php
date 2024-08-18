<?php

namespace App\Filament\Vet\Resources;

use App\Filament\Vet\Resources\VaccinationsResource\Pages;
use App\Filament\Vet\Resources\VaccinationsResource\RelationManagers;
use App\Models\Vaccinations;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VaccinationsResource extends Resource
{
    protected static ?string $model = Vaccinations::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('vaccine_name')
            ->required()
            ->maxLength(255),
            
            Forms\Components\DatePicker::make('vaccination_exp_date')
            ->required(),
            
        Forms\Components\TextInput::make('vaccine_manufacture')
            ->required()
            ->maxLength(20),
            
        Forms\Components\TextInput::make('batch_number')
            ->required()
            ->maxLength(255),
            Forms\Components\DatePicker::make('date_administered')
            ->required(),
            Forms\Components\DatePicker::make('next_due_date')
            ->required(),
        
            Forms\Components\TextInput::make('dosage')
            ->required()
            ->maxLength(20),
            Forms\Components\TextInput::make('administration_method')
            ->required()
            ->maxLength(20),
            Forms\Components\TextInput::make('notes')
            ->required()
            ->maxLength(20),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('vaccine_name')
                ->sortable()
                ->searchable(),
                
            Tables\Columns\TextColumn::make('vaccination_exp_date')
                ->sortable()
                ->searchable(),
                
            Tables\Columns\TextColumn::make('vaccine_manufacture')
                ->sortable()
                ->searchable(),
                
            Tables\Columns\TextColumn::make('batch_number')
                ->sortable()
                ->searchable(),
                
            Tables\Columns\TextColumn::make('date_administered')
                ->date()
                ->sortable()
                ->searchable(),


            Tables\Columns\TextColumn::make('next_due_date')
                ->date()
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('dosage')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('administration_method')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('notes')
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
            'index' => Pages\ListVaccinations::route('/'),
            'create' => Pages\CreateVaccinations::route('/create'),
            'edit' => Pages\EditVaccinations::route('/{record}/edit'),
        ];
    }
}
