<?php

namespace App\Http\Livewire\Admin\Restriction;

use App\Models\Restriction;
use Livewire\Component;

class Single extends Component
{

    public $restriction;

    public function mount(Restriction $Restriction){
        $this->restriction = $Restriction;
    }

    public function delete()
    {
        $this->restriction->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Restriction') ]) ]);
        $this->emit('restrictionDeleted');
    }

    public function render()
    {
        return view('livewire.admin.restriction.single')
            ->layout('admin::layouts.app');
    }
}
