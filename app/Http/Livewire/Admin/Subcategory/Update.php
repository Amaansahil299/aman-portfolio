<?php

namespace App\Http\Livewire\Admin\Subcategory;

use App\Models\Subcategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $subcategory;

    public $name;
    public $description;
    public $category_id;
    
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'category_id' => 'required',        
    ];

    public function mount(Subcategory $Subcategory){
        $this->subcategory = $Subcategory;
        $this->name = $this->subcategory->name;
        $this->description = $this->subcategory->description;
        $this->category_id = $this->subcategory->category_id;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Subcategory') ]) ]);
        
        $this->subcategory->update([
            'name' => $this->name,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.subcategory.update', [
            'subcategory' => $this->subcategory
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Subcategory') ])]);
    }
}
