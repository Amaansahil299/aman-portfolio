<?php

namespace App\Http\Livewire\Admin\UserBrand;

use App\Models\UserBrand;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $brand_id;
    public $user_id;
    
    protected $rules = [
        'brand_id' => 'required',
        'user_id' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('UserBrand') ])]);
        
        UserBrand::create([
            'brand_id' => $this->brand_id,
            'user_id' => $this->user_id,            
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.userbrand.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('UserBrand') ])]);
    }
}
