<?php

namespace App\Http\Livewire\Admin\UserBrand;

use App\Models\UserBrand;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $userbrand;

    public $brand_id;
    public $user_id;
    
    protected $rules = [
        'brand_id' => 'required',
        'user_id' => 'required',        
    ];

    public function mount(UserBrand $UserBrand){
        $this->userbrand = $UserBrand;
        $this->brand_id = $this->userbrand->brand_id;
        $this->user_id = $this->userbrand->user_id;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('UserBrand') ]) ]);
        
        $this->userbrand->update([
            'brand_id' => $this->brand_id,
            'user_id' => $this->user_id,            
        ]);
    }

    public function render()
    {
        return view('livewire.admin.userbrand.update', [
            'userbrand' => $this->userbrand
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('UserBrand') ])]);
    }
}
