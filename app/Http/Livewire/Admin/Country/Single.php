<?php

namespace App\Http\Livewire\Admin\Country;

use App\Models\Country;
use Livewire\Component;

class Single extends Component
{

    public $country;

    public function mount(Country $Country){
        $this->country = $Country;
    }

    public function delete()
    {
        $this->country->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Country') ]) ]);
        $this->emit('countryDeleted');
    }

    public function render()
    {
        return view('livewire.admin.country.single')
            ->layout('admin::layouts.app');
    }
}
