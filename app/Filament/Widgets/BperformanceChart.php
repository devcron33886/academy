<?php

namespace App\Filament\Widgets;

use App\Models\Player;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class BperformanceChart extends ChartWidget {
	protected static ?string $heading = 'Players Chart By Month';

	protected static string $color = 'success';

	protected int | string | array $columnSpan = 'full';

	protected function getData(): array {

		$data = Trend::model(Player::class)
			->between(start: now()->subYear(), end: now()->endOfYear())->perMonth()
			->count();

		return [
			'datasets' => [
				[
					'label' => 'Players Registered',
					'data' => $data->map(fn(TrendValue $value) => $value->aggregate),

				],
			],
			'labels' => $data->map(fn(TrendValue $value) => $value->date),
		];
	}

	protected function getType(): string {
		return 'bar';
	}
}
