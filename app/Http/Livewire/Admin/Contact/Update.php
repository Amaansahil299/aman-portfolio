<?php

namespace App\Http\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $contact;

    public $name;
    public $email;
    public $phone;
    public $message;
    public $is_read;
    
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
        'status' => 'required',        
    ];

    public function mount(Contact $Contact){
        $this->contact = $Contact;
        $this->name = $this->contact->name;
        $this->email = $this->contact->email;
        $this->phone = $this->contact->phone;
        $this->message = $this->contact->message;
        $this->is_read = $this->contact->is_read;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Contact') ]) ]);
        
        $this->contact->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
            'is_read' => $this->is_read,
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.contact.update', [
            'contact' => $this->contact
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Contact') ])]);
    }
}
