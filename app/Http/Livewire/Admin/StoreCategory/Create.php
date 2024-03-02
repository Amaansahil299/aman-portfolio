<?php

namespace App\Http\Livewire\Admin\StoreCategory;

use App\Models\StoreCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $store_id;
    public $subcategory_id;
    
    protected $rules = [
        'store_id' => 'required',
        'subcategory_id' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('StoreCategory') ])]);
        
        StoreCategory::create([
            'store_id' => $this->store_id,
            'subcategory_id' => $this->subcategory_id,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.storecategory.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('StoreCategory') ])]);
    }
}
