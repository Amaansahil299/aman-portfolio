<?php

namespace App\Http\Livewire\Admin\Subscriber;

use App\Models\Subscriber;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $subscriber;

    public $email;
    public $is_subscribed;
    
    protected $rules = [
        'email' => 'required|email',
        'is_subscribed' => 'required',        
    ];

    public function mount(Subscriber $Subscriber){
        $this->subscriber = $Subscriber;
        $this->email = $this->subscriber->email;
        $this->is_subscribed = $this->subscriber->is_subscribed;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Subscriber') ]) ]);
        
        $this->subscriber->update([
            'email' => $this->email,
            'is_subscribed' => $this->is_subscribed,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.subscriber.update', [
            'subscriber' => $this->subscriber
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Subscriber') ])]);
    }
}
