<?php

namespace App\Http\Livewire\Admin\Subscriber;

use App\Models\Subscriber;
use Livewire\Component;

class Single extends Component
{

    public $subscriber;

    public function mount(Subscriber $Subscriber){
        $this->subscriber = $Subscriber;
    }

    public function delete()
    {
        $this->subscriber->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Subscriber') ]) ]);
        $this->emit('subscriberDeleted');
    }

    public function render()
    {
        return view('livewire.admin.subscriber.single')
            ->layout('admin::layouts.app');
    }
}
