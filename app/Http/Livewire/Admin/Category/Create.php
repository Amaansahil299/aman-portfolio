<?php

namespace App\Http\Livewire\Admin\Category;

use App\Core\Constants\StringConstants;
use App\Models\Category;
use App\Traits\ImageOperationsTrait;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads, ImageOperationsTrait;

    public $icon;
    public $name;
    public $description;
    
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'icon' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Category') ])]);
        
        if($this->getPropertyValue('icon') and is_object($this->icon)) {

            $this->icon = self::store($this->getPropertyValue('icon'), StringConstants::$storeURLForCategories);

        }

        Category::create([
            'icon' => $this->icon,
            'name' => $this->name,
            'description' => $this->description,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.category.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Category') ])]);
    }
}
