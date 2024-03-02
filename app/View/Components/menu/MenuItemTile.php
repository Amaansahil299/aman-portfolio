<?php

namespace App\View\Components\menu;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuItemTile extends Component
{
    /**
     * Create a new component instance.
     */

    public $id;
    public $baseRoute;

    public $name;

    public $iconUrl;
    public function __construct($id, $baseRoute, $name, $iconUrl = null)
    {
        $this->baseRoute = $baseRoute;
        $this->id = $id;
        $this->name = $name;
        $this->iconUrl = $iconUrl;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu.menu-item-tile');
    }
}
