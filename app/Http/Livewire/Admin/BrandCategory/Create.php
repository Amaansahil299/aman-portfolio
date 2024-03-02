<?php

namespace App\Http\Livewire\Admin\BrandCategory;

use App\Models\BrandCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $subcategory_id;
    public $brand_id;
    
    protected $rules = [
        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('BrandCategory') ])]);
        
        BrandCategory::create([
            'subcategory_id' => $this->subcategory_id,
            'brand_id' => $this->brand_id,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.brandcategory.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('BrandCategory') ])]);
    }
}
