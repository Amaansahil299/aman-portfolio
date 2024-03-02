<?php

namespace App\Http\Livewire\Admin\UserStore;

use App\Models\UserStore;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $userstore;

    public $store_id;
    public $user_id;
    
    protected $rules = [
        'store_id' => 'required',
        'user_id' => 'required',        
    ];

    public function mount(UserStore $UserStore){
        $this->userstore = $UserStore;
        $this->store_id = $this->userstore->store_id;
        $this->user_id = $this->userstore->user_id;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('UserStore') ]) ]);
        
        $this->userstore->update([
            'store_id' => $this->store_id,
            'user_id' => $this->user_id,            
        ]);
    }

    public function render()
    {
        return view('livewire.admin.userstore.update', [
            'userstore' => $this->userstore
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('UserStore') ])]);
    }
}
