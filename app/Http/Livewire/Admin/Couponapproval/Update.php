<?php

namespace App\Http\Livewire\Admin\CouponApproval;

use App\Models\CouponApproval;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $couponapproval;

    public $coupon_id;
    public $country_id;
    
    protected $rules = [
        'coupon_id' => 'required',
        'country_id' => 'required',        
    ];

    public function mount(CouponApproval $CouponApproval){
        $this->couponapproval = $CouponApproval;
        $this->coupon_id = $this->couponapproval->coupon_id;
        $this->country_id = $this->couponapproval->country_id;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('CouponApproval') ]) ]);
        
        $this->couponapproval->update([
            'coupon_id' => $this->coupon_id,
            'country_id' => $this->country_id,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.couponapproval.update', [
            'couponapproval' => $this->couponapproval
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('CouponApproval') ])]);
    }
}
