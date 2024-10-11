<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VeterinaryResource\Pages;
use App\Filament\Resources\VeterinaryResource\RelationManagers;
use App\Models\Veterinary;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;

class VeterinaryResource extends Resource
{
    protected static ?string $model = Veterinary::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Doctor Information')
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('specialization')
                    ->label('Specialization')
                    ->required()
                    ->maxLength(255),

                TextInput::make('license_number')
                    ->label('License Number')
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
            ]),

        Forms\Components\Section::make('Additional Information')
            ->schema([
                FileUpload::make('profile_picture')
                    ->label('Profile Picture')
                    ->image()
                    ->maxSize(10 * 1024),

                Textarea::make('bio')
                    ->label('Biography')
                    ->rows(3),
            ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('specialization')
                ->sortable()
                ->searchable(),

            Tables\Columns\TextColumn::make('license_number')
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

            Tables\Columns\ImageColumn::make('profile_picture')
                ->sortable(),

            Tables\Columns\TextColumn::make('bio')
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
            'index' => Pages\ListVeterinaries::route('/'),
            'create' => Pages\CreateVeterinary::route('/create'),
            'edit' => Pages\EditVeterinary::route('/{record}/edit'),
        ];
    }
}
