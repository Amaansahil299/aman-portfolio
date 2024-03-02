<?php

namespace App\Http\Livewire\Admin\Coupon;

use App\Models\Coupon;
use Livewire\Component;

class Single extends Component
{

    public $coupon;

    public function mount(Coupon $Coupon){
        $this->coupon = $Coupon;
    }

    public function delete()
    {
        $this->coupon->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Coupon') ]) ]);
        $this->emit('couponDeleted');
    }

    public function render()
    {
        return view('livewire.admin.coupon.single')
            ->layout('admin::layouts.app');
    }
}
