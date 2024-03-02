<?php

namespace App\Http\Livewire\Admin\Subscriber;

use App\Models\Subscriber;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $email;
    public $is_subscribed;
    
    protected $rules = [
        'email' => 'required|email',
        'is_subscribed' => 'required',        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Subscriber') ])]);
        
        Subscriber::create([
            'email' => $this->email,
            'is_subscribed' => $this->is_subscribed,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.subscriber.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Subscriber') ])]);
    }
}
