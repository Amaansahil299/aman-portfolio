<?php

namespace App\Http\Livewire\Admin\CouponFeedback;

use App\Models\CouponFeedback;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $couponfeedback;

    public $coupon_id;
    public $user_id;
    public $is_working;
    
    protected $rules = [
        'coupon_id' => 'required',
        'user_id' => 'required',
        'is_working' => 'required',        
    ];

    public function mount(CouponFeedback $CouponFeedback){
        $this->couponfeedback = $CouponFeedback;
        $this->coupon_id = $this->couponfeedback->coupon_id;
        $this->user_id = $this->couponfeedback->user_id;
        $this->is_working = $this->couponfeedback->is_working;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('CouponFeedback') ]) ]);
        
        $this->couponfeedback->update([
            'coupon_id' => $this->coupon_id,
            'user_id' => $this->user_id,
            'is_working' => $this->is_working,            
        ]);
    }

    public function render()
    {
        return view('livewire.admin.couponfeedback.update', [
            'couponfeedback' => $this->couponfeedback
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('CouponFeedback') ])]);
    }
}
