<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Core\Constants\StringConstants;
use App\Models\Blog;
use App\Traits\ImageOperationsTrait;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Traits\StringOperationsTrait;

class Create extends Component
{
    use WithFileUploads, ImageOperationsTrait;

    public $title;
    public $thumbnail;
    public $content;
    public $short_description;

    protected $rules = [
        'content' => 'required',
        'title' => 'required',
        'short_description' => 'required',
        'thumbnail' => 'required',
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('Blog') ])]);

        if($this->getPropertyValue('thumbnail') and is_object($this->thumbnail)) {
            $this->thumbnail = self::store($this->getPropertyValue('thumbnail'), StringConstants::$storeURLForBlogs);
        }

        Blog::create([
            'title' => $this->title,
            'thumbnail' => $this->thumbnail,
            'content' => $this->content,
            'short_description' => $this->short_description,
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.blog.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('Blog') ])]);
    }
}
