<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Player;
use App\Models\Team;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AstatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Players', Player::count())
                ->description('Total Players')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('Teams', Team::count())
                ->description('Total Teams')
                ->chart([17, 2, 10, 3, 15, 4, 17])
                ->color('warning'),
            Stat::make('Categories', Category::count())
                ->description('Total Categories')

                ->chart([17, 2, 10, 3, 15, 4, 17])
                ->color('info'),
        ];
    }
}
