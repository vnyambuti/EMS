<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeseResource\Pages;
use App\Filament\Resources\EmployeeseResource\RelationManagers;
use App\Models\Employeese;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeeseResource extends Resource
{
    // 'department_id','user_id','date_hired','designation_id'
    protected static ?string $model = Employeese::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Hr';
    protected static ?string $label = 'Employee';
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              
                Select::make('user_id')
                ->relationship(name: 'user', titleAttribute: 'name')->searchable()->required(),
                Select::make('department_id')
                ->relationship(name: 'department', titleAttribute: 'name')->searchable()->required(),
                Select::make('designation_id')
                ->relationship(name: 'designation', titleAttribute: 'name')->searchable()->required(),
                DatePicker::make('date_hired')->label('Joined')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->sortable()->searchable(),
                
                TextColumn::make('department.name')->sortable()->searchable(),
                TextColumn::make('designation.name')->sortable()->searchable(),
              
                TextColumn::make('date_hired')->sortable()->searchable(),
                TextColumn::make('created_at')->dateTime()->sortable()
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
            'index' => Pages\ListEmployeeses::route('/'),
            'create' => Pages\CreateEmployeese::route('/create'),
            'edit' => Pages\EditEmployeese::route('/{record}/edit'),
        ];
    }
}
