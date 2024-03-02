<?php

namespace App\Http\Livewire\Admin\BrandCategory;

use App\Models\BrandCategory;
use Livewire\Component;

class Single extends Component
{

    public $brandcategory;

    public function mount(BrandCategory $BrandCategory){
        $this->brandcategory = $BrandCategory;
    }

    public function delete()
    {
        $this->brandcategory->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('BrandCategory') ]) ]);
        $this->emit('brandcategoryDeleted');
    }

    public function render()
    {
        return view('livewire.admin.brandcategory.single')
            ->layout('admin::layouts.app');
    }
}
