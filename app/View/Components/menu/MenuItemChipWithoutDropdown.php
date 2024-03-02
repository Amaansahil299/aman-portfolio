<?php

namespace App\View\Components\menu;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuItemChipWithoutDropdown extends Component
{
    /**
     * Create a new component instance.
     */

    public $name;
    public $url;

    public function __construct($name, $url)
    {
        $this->name = $name;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu.menu-item-chip-without-dropdown');
    }
}
