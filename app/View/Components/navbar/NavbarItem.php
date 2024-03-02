<?php

namespace App\View\Components\navbar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavbarItem extends Component
{
    /**
     * Create a new component instance.
     */

    public $link;


    public function __construct($link)
    {
        $this->link = $link;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar-item');
    }
}
