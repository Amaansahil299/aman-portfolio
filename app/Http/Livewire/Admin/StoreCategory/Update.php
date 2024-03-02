<?php

namespace App\Http\Livewire\Admin\StoreCategory;

use App\Models\StoreCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $storecategory;

    public $store_id;
    public $subcategory_id;
    
    protected $rules = [
        'store_id' => 'required',
        'subcategory_id' => 'required',        
    ];

    public function mount(StoreCategory $StoreCategory){
        $this->storecategory = $StoreCategory;
        $this->store_id = $this->storecategory->store_id;
        $this->subcategory_id = $this->storecategory->subcategory_id;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('StoreCategory') ]) ]);
        
        $this->storecategory->update([
            'store_id' => $this->store_id,
            'subcategory_id' => $this->subcategory_id,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.storecategory.update', [
            'storecategory' => $this->storecategory
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('StoreCategory') ])]);
    }
}
