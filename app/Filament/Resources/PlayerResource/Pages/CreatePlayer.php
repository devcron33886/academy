<?php

namespace App\Filament\Resources\PlayerResource\Pages;

use App\Filament\Resources\PlayerResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Form;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\HasWizard;

class CreatePlayer extends CreateRecord
{
    use HasWizard;

    protected static string $resource = PlayerResource::class;

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
        $player = $this->record;

        Notification::make()
            ->title('New player registered')
            ->icon('heroicon-o-shopping-bag')
            ->body("{$player->name} is registered successfully.")
            ->actions([
                Action::make('View')
                    ->url(PlayerResource::getUrl('edit', ['record' => $player])),
            ])
            ->color('success')
            ->sendToDatabase(auth()->user());
    }

    protected function getSteps(): array
    {
        return [

            Step::make('Player Details')
                ->schema([
                    Section::make()->schema(PlayerResource::getDetailsFormSchema())->columns(),
                ]),
            Step::make('Team Information')
                ->schema([
                    Section::make()->schema(PlayerResource::getTeamFormSchema())->columns(),
                ]),
            Step::make('Health Information')
                ->schema([
                    Section::make()->schema(PlayerResource::getHealthFormSchema())->columns(),
                ]),

        ];
    }
}
