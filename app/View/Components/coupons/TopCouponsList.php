<?php

namespace App\View\Components\coupons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TopCouponsList extends Component
{
    /**
     * Create a new component instance.
     */

    public bool $shouldDisplayOneItemAlways;
    public function __construct($shouldDisplayOneItemAlways  = false)
    {
        $this->shouldDisplayOneItemAlways = $shouldDisplayOneItemAlways;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.coupons.top-coupons-list');
    }
}
