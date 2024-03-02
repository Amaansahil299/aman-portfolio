<?php

namespace App\Http\Livewire\Admin\StorePhoto;

use App\Models\StorePhoto;
use Livewire\Component;

class Single extends Component
{

    public $storephoto;

    public function mount(StorePhoto $StorePhoto){
        $this->storephoto = $StorePhoto;
    }

    public function delete()
    {
        $this->storephoto->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('StorePhoto') ]) ]);
        $this->emit('storephotoDeleted');
    }

    public function render()
    {
        return view('livewire.admin.storephoto.single')
            ->layout('admin::layouts.app');
    }
}
