<?php

namespace App\View\Components\carousel;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CarouselItem extends Component
{
    public  string $id;
    public  string $imageUrl;
    public  string $subtitle1;
    public  string $subtitle2;
    public string $btnTitle;

    public string $description;

    public function __construct($id, $imageUrl, $subtitle1, $subtitle2, $btnTitle, $description)
    {
        $this->id = $id;
        $this->imageUrl = $imageUrl;
        $this->subtitle1 = $subtitle1;
        $this->subtitle2 = $subtitle2;
        $this->btnTitle = $btnTitle;
        $this->description = $description;

        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.carousel.carousel-item');
    }
}
