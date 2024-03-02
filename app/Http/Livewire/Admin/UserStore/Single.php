<?php

namespace App\Http\Livewire\Admin\UserStore;

use App\Models\UserStore;
use Livewire\Component;

class Single extends Component
{

    public $userstore;

    public function mount(UserStore $UserStore){
        $this->userstore = $UserStore;
    }

    public function delete()
    {
        $this->userstore->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('UserStore') ]) ]);
        $this->emit('userstoreDeleted');
    }

    public function render()
    {
        return view('livewire.admin.userstore.single')
            ->layout('admin::layouts.app');
    }
}
