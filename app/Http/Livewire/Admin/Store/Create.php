<?php

namespace App\Http\Livewire\Admin\Store;

use App\Core\Constants\StringConstants;
use App\Models\Store;
use App\Traits\ImageOperationsTrait;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads, ImageOperationsTrait;

    public $icon;
    public $name;
    public $introduction;
    public $address;
    public $disclosure;
    public $store_url;
    
    protected $rules = [
        'name' => 'required',
        'icon' => 'required',
        'introduction' => 'required',
        'address' => 'required',
        'disclosure' => 'required',
        'store_url' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Store') ])]);
        
        if($this->getPropertyValue('icon') and is_object($this->icon)) {
            $this->icon = self::store($this->getPropertyValue('icon'), StringConstants::$storeURLForStore);
        }

        Store::create([
            'icon' => $this->icon,
            'name' => $this->name,
            'introduction' => $this->introduction,
            'address' => $this->address,
            'disclosure' => $this->disclosure,
            'store_url' => $this->store_url,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.store.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Store') ])]);
    }
}
