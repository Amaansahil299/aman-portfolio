<?php

namespace App\Http\Livewire\Admin\StorePhoto;

use App\Models\StorePhoto;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $storephoto;

    public $title;
    public $description;
    public $url;
    
    protected $rules = [
        'description' => 'required',
        'title' => 'required',
        'url' => 'required',        
    ];

    public function mount(StorePhoto $StorePhoto){
        $this->storephoto = $StorePhoto;
        $this->title = $this->storephoto->title;
        $this->description = $this->storephoto->description;
        $this->url = $this->storephoto->url;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('StorePhoto') ]) ]);
        
        $this->storephoto->update([
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.storephoto.update', [
            'storephoto' => $this->storephoto
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('StorePhoto') ])]);
    }
}
