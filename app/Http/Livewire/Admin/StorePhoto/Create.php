<?php

namespace App\Http\Livewire\Admin\StorePhoto;

use App\Models\StorePhoto;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $url;
    
    protected $rules = [
        'description' => 'required',
        'title' => 'required',
        'url' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('StorePhoto') ])]);
        
        StorePhoto::create([
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.storephoto.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('StorePhoto') ])]);
    }
}
