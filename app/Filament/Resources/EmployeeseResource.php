<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeseResource\Pages;
use App\Filament\Resources\EmployeeseResource\RelationManagers;
use App\Models\Employeese;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeeseResource extends Resource
{
    protected static ?string $model = Employeese::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Hr';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListEmployeeses::route('/'),
            'create' => Pages\CreateEmployeese::route('/create'),
            'edit' => Pages\EditEmployeese::route('/{record}/edit'),
        ];
    }
}
