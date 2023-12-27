<?php

namespace App\Filament\Resources\PlayerResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PerformancesRelationManager extends RelationManager
{
    protected static string $relationship = 'performances';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('score_points')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('score_points')
            ->columns([
                Tables\Columns\TextColumn::make('competition')
                    ->searchable(),
                Tables\Columns\TextColumn::make('season')
                    ->searchable(),
                Tables\Columns\TextColumn::make('score_points')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('field_goal_percentage')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('free_throw_percentage')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('three_point_percentage')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('assists_per_game')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('turnovers_per_game')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('assists_to_turnovers_ratio')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_rebounds_per_game')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('offensive_rebounds_per_game')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('defensive_rebounds_per_game')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('steals_per_game')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('blocks_per_game')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('defensive_efficiency_rating')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('offensive_efficiency_rating')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jump_height')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('speed')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('minutes_played')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
