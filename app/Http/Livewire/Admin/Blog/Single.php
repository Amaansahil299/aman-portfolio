<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Blog;
use Livewire\Component;

class Single extends Component
{

    public $blog;

    public function mount(Blog $Blog){
        $this->blog = $Blog;
    }

    public function delete()
    {
        $this->blog->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('DeletedMessage', ['name' => __('Blog') ]) ]);
        $this->emit('blogDeleted');
    }

    public function render()
    {
        return view('livewire.admin.blog.single')
            ->layout('admin::layouts.app');
    }
}
