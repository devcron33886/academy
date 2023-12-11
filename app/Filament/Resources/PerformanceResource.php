<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PerformanceResource\Pages;
use App\Models\Performance;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PerformanceResource extends Resource
{
    protected static ?string $model = Performance::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-trending-up';

    protected static ?string $navigationGroup = 'Player Management';

    protected static ?string $slug = 'performances-management';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Scoring')
                    ->schema(static::getScoringFormSchema())
                    ->columns(3),
                Forms\Components\Section::make('Playmaking')
                    ->schema(static::getPlayMakingFormSchema()),
                Forms\Components\Section::make('Rebounding')
                    ->schema(static::getReboundFormSchema()),
                Forms\Components\Section::make('Defense')
                    ->schema(static::getDefenseFormSchema()),
                Forms\Components\Section::make('Athleticism')
                    ->schema(static::getAthleticFormSchema()),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('player.name')
                    ->numeric()
                    ->sortable(),
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
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPerformances::route('/'),
            'create' => Pages\CreatePerformance::route('/create'),
            'edit' => Pages\EditPerformance::route('/{record}/edit'),
        ];
    }

    public static function getScoringFormSchema(): array
    {
        return [

            Forms\Components\Select::make('player_id')
                ->relationship('player', 'name')
                ->searchable()
                ->required(),
            Forms\Components\TextInput::make('competition')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('season')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('score_points')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('field_goal_percentage')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('free_throw_percentage')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('three_point_percentage')
                ->required()
                ->numeric(),
        ];
    }

    public static function getPlayMakingFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('assists_per_game')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('turnovers_per_game')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('assists_to_turnovers_ratio')
                ->required()
                ->numeric(),

        ];
    }

    public static function getReboundFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('total_rebounds_per_game')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('offensive_rebounds_per_game')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('defensive_rebounds_per_game')
                ->required()
                ->numeric(),

        ];
    }

    public static function getDefenseFormSchema(): array
    {
        return [

            Forms\Components\TextInput::make('steals_per_game')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('blocks_per_game')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('defensive_efficiency_rating')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('offensive_efficiency_rating')
                ->required()
                ->numeric(),

        ];
    }

    public static function getAthleticFormSchema(): array
    {
        return [

            Forms\Components\TextInput::make('jump_height')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('speed')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('minutes_played')
                ->required()
                ->numeric(),
            Forms\Components\Textarea::make('notes')
                ->required()
                ->columnSpanFull(),

        ];
    }
}
