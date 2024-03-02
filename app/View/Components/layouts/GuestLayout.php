<?php

namespace App\View\Components\layouts;

use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{

    public  $categories;

    public function __construct($categories)
    {

        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.guest');
    }
}
