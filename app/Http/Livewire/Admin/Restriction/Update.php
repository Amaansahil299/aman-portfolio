<?php

namespace App\Http\Livewire\Admin\Restriction;

use App\Models\Restriction;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $restriction;

    public $name;
    public $description;
    
    protected $rules = [
        'name' => 'required',
        'description' => 'required',        
    ];

    public function mount(Restriction $Restriction){
        $this->restriction = $Restriction;
        $this->name = $this->restriction->name;
        $this->description = $this->restriction->description;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Restriction') ]) ]);
        
        $this->restriction->update([
            'name' => $this->name,
            'description' => $this->description,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.restriction.update', [
            'restriction' => $this->restriction
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Restriction') ])]);
    }
}
