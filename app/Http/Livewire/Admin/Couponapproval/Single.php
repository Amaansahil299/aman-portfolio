<?php

namespace App\Http\Livewire\Admin\CouponApproval;

use App\Models\CouponApproval;
use Livewire\Component;

class Single extends Component
{

    public $couponapproval;

    public function mount(CouponApproval $CouponApproval){
        $this->couponapproval = $CouponApproval;
    }

    public function delete()
    {
        $this->couponapproval->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('CouponApproval') ]) ]);
        $this->emit('couponapprovalDeleted');
    }

    public function render()
    {
        return view('livewire.admin.couponapproval.single')
            ->layout('admin::layouts.app');
    }
}
