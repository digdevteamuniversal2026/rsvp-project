<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RsvpResource\Pages;
use App\Filament\Resources\RsvpResource\RelationManagers;
use App\Models\Rsvp;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RsvpResource extends Resource


{
    protected static ?string $navigationLabel = 'Events';      // menu text
protected static ?string $navigationGroup = 'RSVP Management';  // menu group
protected static ?int $navigationSort = 1;   
    protected static ?string $model = Rsvp::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
    Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
    Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
    Tables\Columns\TextColumn::make('guests')->sortable(),
    Tables\Columns\BadgeColumn::make('status')
        ->colors([
            'warning' => 'pending',
            'success' => 'confirmed',
        ])
        ->sortable(),
])
->filters([
    Tables\Filters\SelectFilter::make('status')
        ->options([
            'pending' => 'Pending',
            'confirmed' => 'Confirmed',
        ]),
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
            'index' => Pages\ListRsvps::route('/'),
            'create' => Pages\CreateRsvp::route('/create'),
            'edit' => Pages\EditRsvp::route('/{record}/edit'),
        ];
    }
}
