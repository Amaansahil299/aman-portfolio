<?php

namespace App\Http\Livewire\Admin\StoreCategory;

use App\Models\StoreCategory;
use Livewire\Component;

class Single extends Component
{

    public $storecategory;

    public function mount(StoreCategory $StoreCategory){
        $this->storecategory = $StoreCategory;
    }

    public function delete()
    {
        $this->storecategory->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('StoreCategory') ]) ]);
        $this->emit('storecategoryDeleted');
    }

    public function render()
    {
        return view('livewire.admin.storecategory.single')
            ->layout('admin::layouts.app');
    }
}
