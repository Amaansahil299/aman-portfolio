<?php

namespace App\Http\Livewire\Admin\Discount;

use App\Models\Discount;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $discount;

    public $name;
    public $description;
    
    protected $rules = [
        'name' => 'required',
        'description' => 'required',        
    ];

    public function mount(Discount $Discount){
        $this->discount = $Discount;
        $this->name = $this->discount->name;
        $this->description = $this->discount->description;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Discount') ]) ]);
        
        $this->discount->update([
            'name' => $this->name,
            'description' => $this->description,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.discount.update', [
            'discount' => $this->discount
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Discount') ])]);
    }
}
