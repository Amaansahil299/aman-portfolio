<?php

namespace App\View\Components\coupons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TopCouponsListItem extends Component
{

    public  $coupon;
    /**
     * Create a new component instance.
     */
    public function __construct($coupon)
    {
        $this->coupon = $coupon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.coupons.top-coupons-list-item');
    }
}
