<?php

namespace App\Http\Livewire\Admin\BrandPhoto;

use App\Models\BrandPhoto;
use Livewire\Component;

class Single extends Component
{

    public $brandphoto;

    public function mount(BrandPhoto $BrandPhoto){
        $this->brandphoto = $BrandPhoto;
    }

    public function delete()
    {
        $this->brandphoto->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('BrandPhoto') ]) ]);
        $this->emit('brandphotoDeleted');
    }

    public function render()
    {
        return view('livewire.admin.brandphoto.single')
            ->layout('admin::layouts.app');
    }
}
