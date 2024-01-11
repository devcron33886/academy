<?php

namespace App\View\Components;

use App\Models\Faq;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FaqComponent extends Component
{

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $faqs = Faq::where('status', 1)->get();
        return view('components.faq-component', ['faqs' => $faqs]);
    }
}
