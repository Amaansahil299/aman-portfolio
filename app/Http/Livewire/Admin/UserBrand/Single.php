<?php

namespace App\Http\Livewire\Admin\UserBrand;

use App\Models\UserBrand;
use Livewire\Component;

class Single extends Component
{

    public $userbrand;

    public function mount(UserBrand $UserBrand){
        $this->userbrand = $UserBrand;
    }

    public function delete()
    {
        $this->userbrand->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('UserBrand') ]) ]);
        $this->emit('userbrandDeleted');
    }

    public function render()
    {
        return view('livewire.admin.userbrand.single')
            ->layout('admin::layouts.app');
    }
}
