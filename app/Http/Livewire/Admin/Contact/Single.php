<?php

namespace App\Http\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Component;

class Single extends Component
{

    public $contact;

    public function mount(Contact $Contact){
        $this->contact = $Contact;
    }

    public function delete()
    {
        $this->contact->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Contact') ]) ]);
        $this->emit('contactDeleted');
    }

    public function render()
    {
        return view('livewire.admin.contact.single')
            ->layout('admin::layouts.app');
    }
}
