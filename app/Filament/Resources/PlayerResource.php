<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlayerResource\Pages;
use App\Filament\Resources\PlayerResource\RelationManagers\PerformanceRelationManager;
use App\Filament\Resources\PlayerResource\RelationManagers\PerformancesRelationManager;
use App\Models\Player;
use Coolsam\FilamentFlatpickr\Forms\Components\Flatpickr;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use FilamentTiptapEditor\Enums\TiptapOutput;
use FilamentTiptapEditor\TiptapEditor;
use Marvinosswald\FilamentInputSelectAffix\TextInputSelectAffix;

class PlayerResource extends Resource
{
    protected static ?string $model = Player::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Player Management';

    protected static ?string $slug = 'players-management';

    protected static ?string $recordTitleAttribute = 'name';


    protected static ?int $navigationSort = 1;

    public static function getGloballySearchableAttributes(): array
    {
        return [
            'name',
            'position',
            'status',
            'country.name',
        ];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Personal Information')
                    ->schema(static::getDetailsFormSchema())
                    ->columns(2),
                Forms\Components\Section::make('Team Information')
                    ->schema(static::getTeamFormSchema())
                    ->columns(2),
                Forms\Components\Section::make('Health Information')
                    ->schema(static::getHealthFormSchema())
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('team.name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_of_birth')
                    ->date()
                    ->searchable(),
                Tables\Columns\TextColumn::make('position')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->circular(),

                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
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

    public static function getRelations(): array
    {
        return [
            PerformancesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPlayers::route('/'),
            'create' => Pages\CreatePlayer::route('/create'),
            'edit' => Pages\EditPlayer::route('/{record}/edit'),
        ];
    }

    public static function getDetailsFormSchema(): array
    {
        return [
            Forms\Components\Select::make('country_id')
                ->relationship('country', 'name')
                ->searchable()
                ->reactive()
                ->required(),
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            Flatpickr::make('date_of_birth')
                ->allowInput()
                ->maxDate(now()->subYears(16)->format('Y-m-d'))
                ->required(),
            TextInputSelectAffix::make('height')
                ->numeric()
                ->select(fn () => Forms\Components\Select::make('height_unit')
                    ->extraAttributes(['class' => 'w-[82px]'])->options([
                        'm' => 'm',
                        'cm' => 'cm',
                        'ft' => 'ft',
                    ])->default('m')
                    ->required())
                ->required(),
            TextInputSelectAffix::make('weight')
                ->numeric()
                ->select(fn () => Forms\Components\Select::make('weight_unit')
                    ->extraAttributes(['class' => 'w-[82px]'])->options([
                        'kg' => 'kg',
                        'lbs' => 'lbs',
                    ])->default('kg')
                    ->required())
                ->required(),

            Forms\Components\FileUpload::make('image')
                ->image(),
            Forms\Components\TextInput::make('skills'),
            Forms\Components\TextInput::make('video_link')
                ->url()
                ->maxLength(255),
            TiptapEditor::make('bio')
                ->disk('string') // optional, defaults to config setting
                ->directory('string or Closure returning a string') // optional, defaults to config setting
                ->acceptedFileTypes(['array of file types']) // optional, defaults to config setting
                ->maxFileSize(4048) // optional, defaults to config setting
                ->output(TiptapOutput::Html) // optional, change the format for saved data, default is html
                ->columnSpanFull(),
        ];
    }

    public static function getTeamFormSchema(): array
    {
        return [
            Forms\Components\Select::make('category_id')
                ->relationship('category', 'name')
                ->searchable()
                ->native(false)
                ->required(),

            Forms\Components\Select::make('team_id')
                ->relationship('team', 'name')
                ->searchable()
                ->native(false)
                ->required(),

            Forms\Components\Select::make('position')
                ->options([
                    'Point Guard' => 'Point Guard',
                    'Shooting Guard ' => 'Shooting Guard ',
                    'Small Forward ' => 'Small Forward ',
                    'Power Forward' => 'Power Forward',
                    'Center' => 'Center',
                ])
                ->searchable()
                ->native(false)
                ->required(),
            Forms\Components\Select::make('status')
                ->options([
                    'Active' => 'Active',
                    'Inactive' => 'Inactive',
                ])
                ->native(false)
                ->required(),

        ];
    }

    public static function getHealthFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('health_insurance')
                ->required()
                ->maxLength(255),
            TiptapEditor::make('injury_history')
                ->columnSpanFull(),
            TiptapEditor::make('medical_report')
                ->columnSpanFull(),

        ];
    }
}
