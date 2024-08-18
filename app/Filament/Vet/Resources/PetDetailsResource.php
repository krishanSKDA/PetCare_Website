<?php

namespace App\Filament\Vet\Resources;

use App\Filament\Vet\Resources\PetDetailsResource\Pages;
use App\Filament\Vet\Resources\PetDetailsResource\RelationManagers;
use App\Models\PetDetails;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PetDetailsResource extends Resource
{
    protected static ?string $model = PetDetails::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Forms\Components\TextInput::make('pet_name')
                    ->required()
                    ->maxLength(255),
                    
                Forms\Components\TextInput::make('pet_breed')
                    ->required()
                    ->maxLength(255),
                    
                Forms\Components\Select::make('pet_gender')
                    ->options([
                        'Male' => 'Male',
                        'Female' => 'Female',
                    ])
                    ->required(),
                    
                Forms\Components\DatePicker::make('date_of_birth')
                    ->required(),
                    
                Forms\Components\FileUpload::make('pet_picture')
                    ->image()
                    
                ]);
          
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('pet_name')
                    ->sortable()
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('pet_breed')
                    ->sortable()
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('pet_gender')
                    ->sortable()
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('date_of_birth')
                    ->date()
                    ->sortable()
                    ->searchable(),
                    
                Tables\Columns\ImageColumn::make('pet_picture')
                    ->sortable(),
                
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
            'index' => Pages\ListPetDetails::route('/'),
            'create' => Pages\CreatePetDetails::route('/create'),
            'edit' => Pages\EditPetDetails::route('/{record}/edit'),
        ];
    }
}
