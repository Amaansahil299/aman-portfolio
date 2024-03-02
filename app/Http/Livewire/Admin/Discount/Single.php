<?php

namespace App\Http\Livewire\Admin\Discount;

use App\Models\Discount;
use Livewire\Component;

class Single extends Component
{

    public $discount;

    public function mount(Discount $Discount){
        $this->discount = $Discount;
    }

    public function delete()
    {
        $this->discount->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Discount') ]) ]);
        $this->emit('discountDeleted');
    }

    public function render()
    {
        return view('livewire.admin.discount.single')
            ->layout('admin::layouts.app');
    }
}
