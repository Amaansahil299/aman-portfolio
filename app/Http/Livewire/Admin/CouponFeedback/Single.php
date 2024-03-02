<?php

namespace App\Http\Livewire\Admin\CouponFeedback;

use App\Models\CouponFeedback;
use Livewire\Component;

class Single extends Component
{

    public $couponfeedback;

    public function mount(CouponFeedback $CouponFeedback){
        $this->couponfeedback = $CouponFeedback;
    }

    public function delete()
    {
        $this->couponfeedback->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('CouponFeedback') ]) ]);
        $this->emit('couponfeedbackDeleted');
    }

    public function render()
    {
        return view('livewire.admin.couponfeedback.single')
            ->layout('admin::layouts.app');
    }
}
