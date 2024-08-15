<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppointmentResource\Pages;
use App\Filament\Resources\AppointmentResource\RelationManagers;
use App\Models\Appointment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Select;

class AppointmentResource extends Resource
{
    protected static ?string $model = Appointment::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    
    protected static ?string $navigationLabel = 'Appointments';
    protected static ?string $navigationGroup = "Customer Appointments";
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Pet Owner Details')
            ->schema([
                TextInput::make('petowner_name')
                    ->label('Pet Owner Name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('petowner_email')
                    ->label('Pet Owner Email')
                    ->required()
                    ->email()
                    ->maxLength(255),

                TextInput::make('phone_number')
                    ->label('Phone Number')
                    ->required()
                    ->maxLength(10),
            ]),

        Forms\Components\Section::make('Pet Details')
            ->schema([
                TextInput::make('pet_name')
                    ->label('Pet Name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('pet_type')
                    ->label('Pet Type')
                    ->required()
                    ->maxLength(255),
            ]),

        Forms\Components\Section::make('Appointment Details')
            ->schema([
                DatePicker::make('appointment_date')
                    ->label('Appointment Date')
                    ->required(),

                TimePicker::make('appointment_time')
                    ->label('Appointment Time')
                    ->required(),

                Select::make('service_required')
                    ->label('Service Required')
                    ->options([
                        'Grooming' => 'Grooming',
                        'Vaccination' => 'Vaccination',
                        'Checkup' => 'Checkup',
                        'Surgery' => 'Surgery',
                    ])
                    ->required(),
            ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('petowner_name')->label('Pet Owner Name'),
                Tables\Columns\TextColumn::make('pet_name')->label('Pet Name'),
                Tables\Columns\TextColumn::make('pet_type')->label('Pet Type'),
                Tables\Columns\TextColumn::make('appointment_date')->label('Appointment Date'),
                Tables\Columns\TextColumn::make('appointment_time')->label('Appointment Time'),
                Tables\Columns\TextColumn::make('petowner_email')->label('Pet Owner Email'),
                Tables\Columns\TextColumn::make('phone_number')->label('Phone Number'),
                Tables\Columns\TextColumn::make('service_required')->label('Service Required'),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('service_required')->label('Service Required'),
               
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
           
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAppointments::route('/'),
            'create' => Pages\CreateAppointment::route('/create'),
            'edit' => Pages\EditAppointment::route('/{record}/edit'),
        ];
    }
}
