<?php

namespace App\Http\Livewire\Admin\BrandPhoto;

use App\Models\BrandPhoto;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $url;
    public $brand_id;
    
    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'url' => 'required',
        'brand_id' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('BrandPhoto') ])]);
        
        BrandPhoto::create([
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'brand_id' => $this->brand_id,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.brandphoto.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('BrandPhoto') ])]);
    }
}
