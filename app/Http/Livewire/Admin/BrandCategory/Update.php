<?php

namespace App\Http\Livewire\Admin\BrandCategory;

use App\Models\BrandCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $brandcategory;

    public $subcategory_id;
    public $brand_id;
    
    protected $rules = [
        
    ];

    public function mount(BrandCategory $BrandCategory){
        $this->brandcategory = $BrandCategory;
        $this->subcategory_id = $this->brandcategory->subcategory_id;
        $this->brand_id = $this->brandcategory->brand_id;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('BrandCategory') ]) ]);
        
        $this->brandcategory->update([
            'subcategory_id' => $this->subcategory_id,
            'brand_id' => $this->brand_id,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.brandcategory.update', [
            'brandcategory' => $this->brandcategory
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('BrandCategory') ])]);
    }
}
