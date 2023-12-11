<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Country;
use App\Models\Player;
use App\Models\Team;
use Filament\Forms\Components\Select;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;

class LatestPlayers extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    protected function getTableQuery(): Builder|Relation|null
    {
        return Player::query()->with(['country', 'team'])->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name')
                ->searchable()
                ->sortable(),
            ImageColumn::make('country.flag')
                ->height('30px')
                ->circular()
                ->searchable(),
            TextColumn::make('position')
                ->searchable(),
            TextColumn::make('team.name')
                ->searchable(),
            TextColumn::make('category.name')
        ];
    }

    protected function getTableFilters(): array
    {
        return [
            SelectFilter::make('category_id')
            ->label('Category')
                ->placeholder('All Categories')
                ->options(fn () => Category::pluck('name', 'id')->toArray()),
            SelectFilter::make('country_id')
            ->label('Country')
                ->placeholder('All Countries')
                ->options(fn () => Country::query()->pluck('name', 'id')->toArray()),
            SelectFilter::make('team_id')
            ->label('Team')
                ->placeholder('All Teams')
                ->options(fn () => Team::query()->pluck('name', 'id')->toArray()),
            SelectFilter::make('position')
            ->label('Position')
                ->placeholder('All Positions')
                ->options(fn () => Player::query()->pluck('position', 'position')->toArray()),
            
        ];

    }
}
