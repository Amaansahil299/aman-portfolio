<?php

namespace App\View\Components\blog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogItem extends Component
{
    /**
     * Create a new component instance.
     */
    public $title;
    public $id;
    public $shortDescription;
    public $thumbnail;

    public function __construct($id, $title, $shortDescription, $thumbnail)
    {
        $this->id = $id;
        $this->title = $title;
        $this->shortDescription = $shortDescription;
        $this->thumbnail = $thumbnail;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog.blog-item');
    }
}
