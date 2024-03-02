<?php

namespace App\Http\Livewire\Admin\Subcategory;

use App\Models\Subcategory;
use Livewire\Component;

class Single extends Component
{

    public $subcategory;

    public function mount(Subcategory $Subcategory){
        $this->subcategory = $Subcategory;
    }

    public function delete()
    {
        $this->subcategory->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Subcategory') ]) ]);
        $this->emit('subcategoryDeleted');
    }

    public function render()
    {
        return view('livewire.admin.subcategory.single')
            ->layout('admin::layouts.app');
    }
}
