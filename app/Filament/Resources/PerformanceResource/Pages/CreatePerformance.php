<?php

namespace App\Filament\Resources\PerformanceResource\Pages;

use App\Filament\Resources\PerformanceResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Form;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Concerns\HasWizard;
use Filament\Resources\Pages\CreateRecord;

class CreatePerformance extends CreateRecord
{
    use HasWizard;

    protected static string $resource = PerformanceResource::class;

    public function form(Form $form): Form
    {
        return parent::form($form)
            ->schema([
                Wizard::make($this->getSteps())
                    ->startOnStep($this->getStartStep())
                    ->cancelAction($this->getCancelFormAction())
                    ->submitAction($this->getSubmitFormAction())
                    ->skippable($this->hasSkippableSteps())
                    ->contained(),
            ])
            ->columns(null);
    }

    protected function afterCreate(): void
    {
        $performance = $this->record;

        Notification::make()
            ->title('New performance recorded')
            ->icon('heroicon-o-shopping-bag')
            ->body("{$performance->player->name} is recorded successfully.")
            ->actions([
                Action::make('View')
                    ->url(PerformanceResource::getUrl('edit', ['record' => $performance])),
            ])
            ->color('success')
            ->sendToDatabase(auth()->user());
    }

    protected function getSteps(): array
    {
        return [

            Step::make('Scoring')
                ->schema([
                    Section::make()->schema(PerformanceResource::getScoringFormSchema())->columns(),
                ]),
            Step::make('Playmaking')
                ->schema([
                    Section::make()->schema(PerformanceResource::getPlayMakingFormSchema())->columns(),
                ]),
            Step::make('Rebounding')
                ->schema([
                    Section::make()->schema(PerformanceResource::getReboundFormSchema())->columns(),
                ]),
            Step::make('Defense')
                ->schema([
                    Section::make()->schema(PerformanceResource::getDefenseFormSchema())->columns(),
                ]),
            Step::make('Athleticism')
                ->schema([
                    Section::make(PerformanceResource::getAthleticFormSchema())->columns(),
                ]),

        ];
    }
}
