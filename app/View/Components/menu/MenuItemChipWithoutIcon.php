<?php

namespace App\View\Components\menu;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuItemChipWithoutIcon extends Component
{
    public $name;
    public $categories;
    public $baseRoute;

    public function __construct($name, $baseRoute, $categories)
    {
        $this->name = $name;
        $this->baseRoute = $baseRoute;
        $this->categories = $categories;
    }

    public function render(): View|Closure|string
    {
        return view('components.menu.menu-item-chip-without-icon');
    }
}
