<?php

namespace App\Http\Livewire\Admin\Subcategory;

use App\Models\Subcategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $category_id;
    
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'category_id' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Subcategory') ])]);
        
        Subcategory::create([
            'name' => $this->name,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.subcategory.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Subcategory') ])]);
    }
}
