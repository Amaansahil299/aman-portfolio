<?php

namespace App\View\Components\news;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SubscibeComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public bool $isBackgroundDark;
    public function __construct($isBackgroundDark)
    {
        $this->isBackgroundDark = $isBackgroundDark;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news.subscibe-component');
    }
}
