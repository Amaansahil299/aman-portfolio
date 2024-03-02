<?php

namespace App\Http\Livewire\Admin\Store;

use App\Core\Constants\StringConstants;
use App\Models\Store;
use App\Traits\ImageOperationsTrait;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads, ImageOperationsTrait;

    public $store;

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

    public function mount(Store $Store){
        $this->store = $Store;
        $this->icon = $this->store->icon;
        $this->name = $this->store->name;
        $this->introduction = $this->store->introduction;
        $this->address = $this->store->address;
        $this->disclosure = $this->store->disclosure;
        $this->store_url = $this->store->store_url;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Store') ]) ]);
        
        if($this->getPropertyValue('icon') and is_object($this->icon)) {
            $this->icon = self::store($this->getPropertyValue('icon'), StringConstants::$storeURLForStore);
        }

        $this->store->update([
            'icon' => $this->icon,
            'name' => $this->name,
            'introduction' => $this->introduction,
            'address' => $this->address,
            'disclosure' => $this->disclosure,
            'store_url' => $this->store_url,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.store.update', [
            'store' => $this->store
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Store') ])]);
    }
}
