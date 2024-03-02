<?php

namespace App\Http\Livewire\Admin\CouponApproval;

use App\Models\CouponApproval;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $coupon_id;
    public $country_id;
    
    protected $rules = [
        'coupon_id' => 'required',
        'country_id' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('CouponApproval') ])]);
        
        CouponApproval::create([
            'coupon_id' => $this->coupon_id,
            'country_id' => $this->country_id,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.couponapproval.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('CouponApproval') ])]);
    }
}
