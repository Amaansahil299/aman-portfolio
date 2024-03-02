<?php

namespace App\Http\Livewire\Admin\Coupon;

use App\Models\Coupon;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $coupon;

    public $title;
    public $description_1;
    public $description_2;
    public $description_3;
    public $term_1;
    public $term_2;
    public $term_3;
    public $term_4;
    public $term_5;
    public $term_6;
    public $specification_title;
    public $rating;
    public $store_id;
    public $brand_id;
    public $start_datetime;
    public $end_datetime;
    public $thumbnail;
    public $is_verified;
    public $verified_at;
    public $offer_id;
    public $discount_id;
    public $restriction_id;
    public $event_id;
    public $url;
    
    protected $rules = [
        'title' => 'required',
        'description_1' => 'required',
        'description_2' => '',
        'description_3' => '',
        'term_1' => '',
        'term_2' => '',
        'term_3' => '',
        'term_4' => '',
        'term_5' => '',
        'term_6' => '',
        'specification_title' => 'required',
        'rating' => 'required',
        'store_id' => 'required',
        'brand_id' => 'required',
        'start_datetime' => 'required',
        'end_datetime' => 'required',
        'thumbnail' => 'required',
        'is_verified' => 'required',
        'verified_at' => 'required',
        'offer_id' => 'required',
        'discount_id' => 'required',
        'restriction_id' => 'required',
        'event_id' => 'required',
        'url' => 'required',        
    ];

    public function mount(Coupon $Coupon){
        $this->coupon = $Coupon;
        $this->title = $this->coupon->title;
        $this->description_1 = $this->coupon->description_1;
        $this->description_2 = $this->coupon->description_2;
        $this->description_3 = $this->coupon->description_3;
        $this->term_1 = $this->coupon->term_1;
        $this->term_2 = $this->coupon->term_2;
        $this->term_3 = $this->coupon->term_3;
        $this->term_4 = $this->coupon->term_4;
        $this->term_5 = $this->coupon->term_5;
        $this->term_6 = $this->coupon->term_6;
        $this->specification_title = $this->coupon->specification_title;
        $this->rating = $this->coupon->rating;
        $this->store_id = $this->coupon->store_id;
        $this->brand_id = $this->coupon->brand_id;
        $this->start_datetime = $this->coupon->start_datetime;
        $this->end_datetime = $this->coupon->end_datetime;
        $this->thumbnail = $this->coupon->thumbnail;
        $this->is_verified = $this->coupon->is_verified;
        $this->verified_at = $this->coupon->verified_at;
        $this->offer_id = $this->coupon->offer_id;
        $this->discount_id = $this->coupon->discount_id;
        $this->restriction_id = $this->coupon->restriction_id;
        $this->event_id = $this->coupon->event_id;
        $this->url = $this->coupon->url;        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        if($this->getRules())
            $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Coupon') ]) ]);
        
        if($this->getPropertyValue('thumbnail') and is_object($this->thumbnail)) {
            $this->thumbnail = $this->getPropertyValue('thumbnail')->store('thumbnail');
        }

        $this->coupon->update([
            'title' => $this->title,            'description_1' => $this->description_1,            'description_2' => $this->description_2,            'description_3' => $this->description_3,            'term_1' => $this->term_1,            'term_2' => $this->term_2,            'term_3' => $this->term_3,            'term_4' => $this->term_4,            'term_5' => $this->term_5,            'term_6' => $this->term_6,            'specification_title' => $this->specification_title,            'rating' => $this->rating,
            'store_id' => $this->store_id,
            'brand_id' => $this->brand_id,
            'start_datetime' => $this->start_datetime,
            'end_datetime' => $this->end_datetime,
            'thumbnail' => $this->thumbnail,
            'is_verified' => $this->is_verified,
            'verified_at' => $this->verified_at,
            'offer_id' => $this->offer_id,
            'discount_id' => $this->discount_id,
            'restriction_id' => $this->restriction_id,
            'event_id' => $this->event_id,
            'url' => $this->url,            
        ]);
    }

    public function render()
    {
        return view('livewire.admin.coupon.update', [
            'coupon' => $this->coupon
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Coupon') ])]);
    }
}
