<?php

namespace App\View\Components\navbar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GuestNavigation extends Component
{



    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar.guest-navigation');
    }
}
