<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $url;
    public $store_id;
    
    protected $rules = [
        'name' => 'required',
        'url' => 'required',
        'store_id' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Brand') ])]);
        
        Brand::create([
            'name' => $this->name,
            'url' => $this->url,
            'store_id' => $this->store_id,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.brand.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Brand') ])]);
    }
}
