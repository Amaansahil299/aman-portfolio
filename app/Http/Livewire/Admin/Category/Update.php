<?php

namespace App\Http\Livewire\Admin\Category;

use App\Core\Constants\StringConstants;
use App\Models\Category;
use App\Traits\ImageOperationsTrait;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads, ImageOperationsTrait;

    public $category;

    public $icon;
    public $name;
    public $description;
    
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'icon' => 'required',        
    ];

    public function mount(Category $Category){
        $this->category = $Category;
        $this->icon = $this->category->icon;
        $this->name = $this->category->name;
        $this->description = $this->category->description;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Category') ]) ]);
        
        if($this->getPropertyValue('icon') and is_object($this->icon)) {
            $this->icon = self::store($this->getPropertyValue('icon'), StringConstants::$storeURLForCategories);
        }

        $this->category->update([
            'icon' => $this->icon,
            'name' => $this->name,
            'description' => $this->description,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.category.update', [
            'category' => $this->category
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Category') ])]);
    }
}
