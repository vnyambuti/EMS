<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Acl';
    // 'email',
    // 'firstname',
    // 'lastname',
    // 'address',
    // 'city_id',
    // 'state_id',
    // 'country_id',
    // 'zip',
    // 'birthdate',
    // 'password',
    // 'phone',
    // 'name'

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('firstname')->label('FirstName')->unique()->required(),
                TextInput::make('lastname')->label('LastName')->unique()->required(),
                TextInput::make('name')->label('Username')->unique()->required(),
                TextInput::make('email')->label('Email')->unique()->required(),
                TextInput::make('phone')->label('Phone')->unique()->required(),
                TextInput::make('address')->label('Address'),
                TextInput::make('zip')->label('Zip'),
                DatePicker::make('birthdate')->label('BirthDate')->required(),
                Select::make('country_id')
                ->relationship(name: 'country', titleAttribute: 'name')->searchable()->required(),
                Select::make('state_id')
                ->relationship(name: 'state', titleAttribute: 'name')->searchable()->required(),
                Select::make('city_id')
                ->relationship(name: 'city', titleAttribute: 'name')->searchable()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable(),
                TextColumn::make('firstname')->sortable()->searchable(),
                TextColumn::make('lastname')->sortable()->searchable(),
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('address')->sortable()->searchable(),
                TextColumn::make('zip')->sortable()->searchable(),
                TextColumn::make('birthdate')->sortable()->searchable(),
                TextColumn::make('phone')->sortable()->searchable(),
               
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
