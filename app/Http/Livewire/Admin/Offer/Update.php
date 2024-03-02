<?php

namespace App\Http\Livewire\Admin\Offer;

use App\Models\Offer;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $offer;

    public $name;
    public $description;
    
    protected $rules = [
        'name' => 'required',
        'description' => 'required',        
    ];

    public function mount(Offer $Offer){
        $this->offer = $Offer;
        $this->name = $this->offer->name;
        $this->description = $this->offer->description;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Offer') ]) ]);
        
        $this->offer->update([
            'name' => $this->name,
            'description' => $this->description,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.offer.update', [
            'offer' => $this->offer
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Offer') ])]);
    }
}
