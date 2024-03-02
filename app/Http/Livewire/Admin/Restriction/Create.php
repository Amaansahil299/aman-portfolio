<?php

namespace App\Http\Livewire\Admin\Restriction;

use App\Models\Restriction;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    
    protected $rules = [
        'name' => 'required',
        'description' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Restriction') ])]);
        
        Restriction::create([
            'name' => $this->name,
            'description' => $this->description,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.restriction.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Restriction') ])]);
    }
}
