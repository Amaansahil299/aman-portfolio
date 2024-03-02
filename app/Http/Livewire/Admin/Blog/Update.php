<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Core\Constants\StringConstants;
use App\Models\Blog;
use App\Traits\ImageOperationsTrait;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads, ImageOperationsTrait;

    public $blog;

    public $title;
    public $thumbnail;
    public $content;
    public $short_description;

    protected $rules = [
        'content' => 'required',
        'title' => 'required',
        'thumbnail' => 'required',
        'short_description' => 'required',
    ];

    public function mount(Blog $Blog){
        $this->blog = $Blog;
        $this->title = $this->blog->title;
        $this->thumbnail = $this->blog->thumbnail;
        $this->content = $this->blog->content;
        $this->short_description = $this->blog->short_description;
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Blog') ]) ]);

        if($this->getPropertyValue('thumbnail') and is_object($this->thumbnail)) {
            $this->thumbnail = self::store($this->getPropertyValue('thumbnail'), StringConstants::$storeURLForBlogs);
        }


        $this->blog->update([
            'title' => $this->title,
            'thumbnail' => $this->thumbnail ,
            'content' => $this->content,
            'short_description' => $this->short_description,
            'user_id' => auth()->id(),
        ]);
    }


    public function render()
    {
        return view('livewire.admin.blog.update', [
            'blog' => $this->blog
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Blog') ])]);
    }
}
