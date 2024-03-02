<?php

namespace App\Http\Livewire\Admin\UserStore;

use App\Models\UserStore;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $store_id;
    public $user_id;
    
    protected $rules = [
        'store_id' => 'required',
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

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('UserStore') ])]);
        
        UserStore::create([
            'store_id' => $this->store_id,
            'user_id' => $this->user_id,            
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.userstore.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('UserStore') ])]);
    }
}
