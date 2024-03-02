<?php

namespace App\Http\Livewire\Admin\BrandPhoto;

use App\Models\BrandPhoto;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $brandphoto;

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

    public function mount(BrandPhoto $BrandPhoto){
        $this->brandphoto = $BrandPhoto;
        $this->title = $this->brandphoto->title;
        $this->description = $this->brandphoto->description;
        $this->url = $this->brandphoto->url;
        $this->brand_id = $this->brandphoto->brand_id;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('BrandPhoto') ]) ]);
        
        $this->brandphoto->update([
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'brand_id' => $this->brand_id,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.brandphoto.update', [
            'brandphoto' => $this->brandphoto
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('BrandPhoto') ])]);
    }
}
