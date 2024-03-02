<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $brand;

    public $name;
    public $url;
    public $store_id;
    
    protected $rules = [
        'name' => 'required',
        'url' => 'required',
        'store_id' => 'required',        
    ];

    public function mount(Brand $Brand){
        $this->brand = $Brand;
        $this->name = $this->brand->name;
        $this->url = $this->brand->url;
        $this->store_id = $this->brand->store_id;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Brand') ]) ]);
        
        $this->brand->update([
            'name' => $this->name,
            'url' => $this->url,
            'store_id' => $this->store_id,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.brand.update', [
            'brand' => $this->brand
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Brand') ])]);
    }
}
