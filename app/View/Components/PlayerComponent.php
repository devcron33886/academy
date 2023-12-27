<?php

namespace App\View\Components;

use App\Models\Player;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PlayerComponent extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $players = Player::with(['team', 'performances', 'country'])
            ->paginate(12);
        return view('components.player-component', ['players' => $players]);
    }
}
