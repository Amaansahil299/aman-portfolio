<?php

namespace App\Http\Livewire\Admin\Offer;

use App\Models\Offer;
use Livewire\Component;

class Single extends Component
{

    public $offer;

    public function mount(Offer $Offer){
        $this->offer = $Offer;
    }

    public function delete()
    {
        $this->offer->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Offer') ]) ]);
        $this->emit('offerDeleted');
    }

    public function render()
    {
        return view('livewire.admin.offer.single')
            ->layout('admin::layouts.app');
    }
}
