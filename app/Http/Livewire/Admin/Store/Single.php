<?php

namespace App\Http\Livewire\Admin\Store;

use App\Models\Store;
use Livewire\Component;

class Single extends Component
{

    public $store;

    public function mount(Store $Store){
        $this->store = $Store;
    }

    public function delete()
    {
        $this->store->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Store') ]) ]);
        $this->emit('storeDeleted');
    }

    public function render()
    {
        return view('livewire.admin.store.single')
            ->layout('admin::layouts.app');
    }
}
