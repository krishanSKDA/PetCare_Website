<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PetDetailsResource\Pages;
use App\Filament\Resources\PetDetailsResource\RelationManagers;
use App\Models\PetDetails;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;

class PetDetailsResource extends Resource
{
    protected static ?string $model = PetDetails::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Pet Information')
                ->schema([
                    TextInput::make('pet_name')
                        ->label('Pet Name')
                        ->required()
                        ->maxLength(255),
                    
                    TextInput::make('pet_breed')
                        ->label('Pet Breed')
                        ->required()
                        ->maxLength(255),
                    
                    Select::make('pet_gender')
                        ->label('Pet Gender')
                        ->options([
                            'Male' => 'Male',
                            'Female' => 'Female',
                        ])
                        ->required(),
                    
                    DatePicker::make('date_of_birth')
                        ->label('Date of Birth')
                        ->required(),
                    
                    FileUpload::make('pet_picture')
                        ->label('Pet Picture')
                        ->image(),
                ]),
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
