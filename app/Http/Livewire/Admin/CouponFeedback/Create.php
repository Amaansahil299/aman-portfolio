<?php

namespace App\Http\Livewire\Admin\CouponFeedback;

use App\Models\CouponFeedback;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $coupon_id;
    public $user_id;
    public $is_working;
    
    protected $rules = [
        'coupon_id' => 'required',
        'user_id' => 'required',
        'is_working' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('CouponFeedback') ])]);
        
        CouponFeedback::create([
            'coupon_id' => $this->coupon_id,
            'user_id' => $this->user_id,
            'is_working' => $this->is_working,            
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.couponfeedback.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('CouponFeedback') ])]);
    }
}
