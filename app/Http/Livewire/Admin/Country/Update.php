<?php

namespace App\Http\Livewire\Admin\Country;

use App\Models\Country;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $country;

    public $name;
    public $code;
    
    protected $rules = [
        'name' => 'required',
        'code' => 'required',        
    ];

    public function mount(Country $Country){
        $this->country = $Country;
        $this->name = $this->country->name;
        $this->code = $this->country->code;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Country') ]) ]);
        
        $this->country->update([
            'name' => $this->name,
            'code' => $this->code,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.country.update', [
            'country' => $this->country
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Country') ])]);
    }
}
